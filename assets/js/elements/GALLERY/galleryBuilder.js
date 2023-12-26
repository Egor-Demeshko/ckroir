/**
 * 
 * @param {HTMLElement} target - сама галлерея
 * @param {string} HOST 
 */
export async function galleryBuilder(target, createGlide){
    if(!target || !createGlide) return;
    const sliderTemplateId = "full_window_template";
    const sliderTemplate = document.getElementById(sliderTemplateId);
    if(!sliderTemplate) return;
    const sliderSlideTemplateId = "full_window_slide_template";  
    /**id элемент, UL, куда будут вставляться слайды. для галлереи */
    const placeToInsertSlides = "full_window__slides";
    const selector = ".photos__img_wrapper[data-image_id]"; 

    //проходим по элементам, собираем id для запроса фотографий по api
    const images = target.querySelectorAll(selector);
    const imageIds = [];
    for(let i = 0; i < images.length; i++){
        const id = images[i].dataset.image_id;
        if(!id || isNaN(id)) continue;

        imageIds.push(id);
    }
    
    /**запускаем наполнений разметки галлереи только если есть id */
    if(imageIds.length > 0){
        const fullImagesData = await getImagesUrls(imageIds);
        let result = await populateGallery(sliderTemplateId, fullImagesData, placeToInsertSlides);
        if(result){
            showGallery();
            createGlide({
                selector: `#${sliderTemplateId}`,
                animamationDuration: 800,
                autoplay: false,
                perView: 1,
                gap: "0px",
            });

        }
    }


    async function getImagesUrls(imageIds){  
        /**строка запрос фотографий по id из Wordpress API */
        const  url = `/wp-json/wp/v2/media/?include=${imageIds.join(',')}`;
        try{
            const response = await fetch(url, {
                'Content-Type:': "application/json",
            });

            if(response.ok){
                const data = await response.json();
                return extractImgUrls(data);
            }
        } catch(e) {
            console.error(e.message);
            return;
        }

        function extractImgUrls(data){
            const fullImages = [];
            
            for(let {id, caption, title, media_details} of Object.values(data)){
                const url = media_details.sizes.full.source_url;
                const alt_text = caption?.alt_text;
                const img_name = title?.rendered;
                if(url) fullImages.push({
                    id,
                    alt_text,
                    img_name,
                    url
                });
            }

            return fullImages;
        }
    }




    function showGallery(){
        const wrapper = sliderTemplate.closest('.full_window');
        if(!wrapper) return;
        wrapper.classList.add("full_window--active");
        wrapper.addEventListener("click", clickHandler)
        function clickHandler(e){
            const target = e.target;

            if(target.tagName === "I" || target.tagName === "IMG" || target.tagName === "BUTTON") return;

            wrapper.classList.remove("full_window--active");
            wrapper.removeEventListener("click", clickHandler);
        }
    }

    async function populateGallery(sliderTemplateId, fullImagesData, placeToInsertSlides){
        const sliderTemplate = document.getElementById(sliderTemplateId);
        if(!sliderTemplate){
            console.error("Нет места для галлереи");
            return;
        }
        const slidesPlace = sliderTemplate.querySelector(`.${placeToInsertSlides}`);  
        if(!slidesPlace) return;
        slidesPlace.innerHTML = ""; 

        for(let {id, alt_text, img_name, url} of fullImagesData){
            const li = document.createElement("li");
            li.className = "glide__slide full_window__slide";

            const img = document.createElement("img");
            img.src = url;
            img.alt = alt_text || '';
            img.id = id;
            img.title = img_name || "";

            li.appendChild(img);
            slidesPlace.appendChild(li);
        }
         return true;       
    }
}