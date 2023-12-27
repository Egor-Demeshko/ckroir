<?php
get_header();
?>
<style>
           /*highcontrast*/
           html.highcontrast .header-post{
            border-bottom: 4px solid black;
        }

        html.highcontrast .header-post__menu-item a:hover{
            border-bottom: 4px solid transparent;
        }

        html.highcontrast .header-post__icon{
            stroke: black;
        }

        .heading{
            font-family: "Trykker-Regular", sans-serif;
            font-size: clamp(3rem, 27vw, 15rem) !important; 
        }

        .heading, p{
            margin: 0;
        }

        .main__home{
            display: flex;
            justify-content: center;
            align-items: center;
            width: clamp(10rem, 16.9vw, 15.25rem);
            height: clamp(10rem, 16.9vw, 15.25rem);
            background-color: var(--accent);
            color: var(--white);
            border-radius: 30px;
            margin-top: 3.5rem;
        }
        .main__home svg{
            width: clamp(5.32rem, 9vw, 8.1rem);
            height: clamp(5.32rem, 9vw, 8.1rem);
        }

        .goUp{
            display: none;
            width: 70px;
            height: 70px;
            border-radius: 20px;
            box-shadow: 0 0 4px var(--shadow);
            padding: 24px 14px;
            justify-content: center;
            align-items: center;
            background-color: var(--main-dark);
            position: fixed;
            bottom: 110px;
            right: 16px;
            cursor: pointer;
            color: var(--background);
        }
        
        .stop-scroll{
            bottom: 300px;
        }
        
        @media (min-width: 32em){
            .goUp{
            bottom: 50px;
            right: 70px;
            }
        
            .stop-scroll{
            bottom: 140px;
            }
        }

        .highcontrast__control{
            padding: 1rem clamp(1rem, 2.2vw, 2rem);
            opacity: 0;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translate(-50%, 0);
            border: 2px solid black;
            border-radius: 4px;
            display: none;
        }

        .highcontrast__buttons{
            display: flex;
            gap: clamp(.4rem, 1.1vw, 1rem);
            margin-top: clamp(.4rem, 1.1vw, 1rem);
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .highcontrast__btn{
            border: 2px solid black;
            border-radius: 10px;
            padding: .2rem 1rem;
        }

        @media screen and (max-width: 800px){
            .highcontrast__control{
                width: 90%;
            }
        }

        .row404{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .row404__text{
            font-size: clamp( 1rem, 2.2vw, 2rem);
        }

        @media screen and (max-width: 800px){
            .row404{
                flex-direction: column;
            }
        }
</style>
<section>
<div class="container row404">
    <h1 class="heading">404</h1>
    <p class="row404__text"><?php echo __("Нет такой страницы  &#9786;", "ckror")?></p>
    <a class="main__home" href="/" aria-label=<?php echo __("Перейти на главную страницу", "ckror")?>>
        <svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M18.49 26.6688V19.887C18.49 19.5872 18.3674 19.2997 18.1492 19.0878C17.931 18.8758 17.635 18.7567 17.3264 18.7567H12.6718C12.3632 18.7567 12.0672 18.8758 11.849 19.0878C11.6308 19.2997 11.5082 19.5872 11.5082 19.887V26.6688C11.5082 26.9685 11.3856 27.256 11.1674 27.468C10.9492 27.6799 10.6533 27.799 10.3447 27.7991L3.36373 27.7999C3.21091 27.8 3.05958 27.7707 2.91838 27.7139C2.77719 27.6572 2.64889 27.5739 2.54082 27.4689C2.43275 27.364 2.34703 27.2394 2.28854 27.1022C2.23005 26.9651 2.19995 26.8181 2.19995 26.6697V13.6065C2.19995 13.449 2.23383 13.2933 2.29941 13.1493C2.36498 13.0053 2.46082 12.8762 2.58077 12.7702L14.2163 2.49396C14.4305 2.30479 14.7096 2.19996 14.9991 2.19995C15.2886 2.19994 15.5677 2.30475 15.7819 2.4939L27.4191 12.7702C27.539 12.8762 27.6349 13.0053 27.7005 13.1493C27.7661 13.2933 27.8 13.4491 27.8 13.6065V26.6697C27.8 26.8181 27.7698 26.9651 27.7114 27.1022C27.6529 27.2394 27.5671 27.364 27.4591 27.469C27.351 27.5739 27.2227 27.6572 27.0815 27.714C26.9403 27.7707 26.789 27.8 26.6362 27.8L19.6535 27.7991C19.3449 27.799 19.049 27.6799 18.8308 27.468C18.6126 27.256 18.49 26.9685 18.49 26.6688Z" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
</div>
</section>
<hr class="breaker">
<?php
get_footer();
wp_footer();
?>