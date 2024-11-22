<style>
    :root {
    --primary-color: #440a67;
    --primary-color-blur: #430a6750;
    --secondary-color: #4ca1a3;
    --tertiary-color: #b4aee8;
    --orange: #fb9224;
    --red: #ff3333;
    --light-red: #fda8a8;
    --gray: #f4f4f4;
    --orange: #F7941E;
    --light-orange: rgba(247, 148, 30, 0.2);
    --black-text: #333;
    --gray-text: #888;
    --white: #fff;
}

#wrapper {
    background-image: url(../images/general/bookpattern.png);
}

main {
    display: flex;
    flex-wrap: wrap;

    max-width: 980px;
    min-width: 280px;
    height: auto;
    margin: auto;

    /* background-color: lightblue; */

    /* phan tu chua cac noi dung dai, nen doi thanh font thuan loi cho viec doc */
    font-family: 'Open Sans';
}
/* company-inf css */
.company-inf {
    width: 100%;
    height: auto;
    padding: 1rem;
    margin: 2rem auto;

    background-color: var(--white);

    border-radius: 0.5rem;
    box-shadow: 0 0 0.5rem var(--black-text);
}

.company-inf .heading {
    width: 100%;
    height: auto;
    padding: 3.5rem 0 3rem;

    /* background-color: #ddd; */

    font-size: 3rem;
    text-align: center;
    font-weight: bold;
}

.company-inf article {
    margin-bottom: 1.5rem;

    /* background-color: #ff5; */
}

.company-inf .title {
    width: 100%;
    height: 4rem;

    /* background-color: #eee; */

    font-size: 2.4rem;
    line-height: 4rem;
}

.company-inf .content {
    width: 100%;
    height: fit-content;

    /* background-color: #ddd; */

    font-size: 1.8rem;
    /* text-align: justify; */
}

.company-inf .content ul {
    padding: 0 1.2rem 0 2.2rem;
}

.company-inf .content li {
    margin-top: 0.5rem;
}

.company-inf iframe{
    width: calc(100% - 2.2rem);
    height: 25rem;
    margin: 2rem auto 0;

    border-radius: 0.5rem;
    border: 0.2rem solid var(--black-text);
}

/* company-strength css */
.company-strength {
    width: 100%;
    height: auto;
    padding: 1rem;
    margin: 0 auto 2rem;

    background-color: var(--white);

    border-radius: 0.5rem;
    box-shadow: 0 0 0.5rem var(--black-text);
}

.company-strength .heading {
    width: 100%;
    height: auto;
    padding: 3.5rem 0 3rem;

    /* background-color: #ddd; */

    font-size: 3rem;
    text-align: center;
    font-weight: bold;
}

.company-strength article {
    margin-bottom: 1.5rem;

    /* background-color: #ff5; */
}

.company-strength .title {
    width: 100%;
    height: 4rem;

    /* background-color: #eee; */

    font-size: 2.4rem;
    line-height: 4rem;
}

.company-strength .contain-content{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;

    width: 100%;
    height: fit-content;

    /* background-color: #5dd; */

}

.company-strength .content {
    width: calc(100% - 35rem);
    min-width: 32rem;
    height: fit-content;
    padding: 0 2.2rem;

    /* background-color: #5d5; */

    font-size: 1.8rem;
    text-align: justify;
}

.company-strength li{
    margin-top: 0.5rem;
}

.company-strength img{
    width: 35rem;
    height: 35rem;

    border-radius: 0.5rem;
    border: 0.2rem solid var(--black-text);
}

/* top-comment css */
.top-comment {
    position: relative;

    width: 100%;
    height: auto;
    padding: 1rem 0;
    margin: 0 auto 2rem;

    background-color: var(--white);

    border-radius: 0.5rem;
    box-shadow: 0 0 0.5rem var(--black-text);
}

.top-comment .heading { 
    width: 100%;
    height: auto;
    padding: 3.5rem 0 3rem;

    /* background-color: #ddd; */

    font-size: 3rem;
    text-align: center;
    font-weight: bold;
}

.top-comment button {
    position: absolute;
    top: calc(50% - 10rem);
    z-index: 1;

    width: 9.5rem;
    height: 17rem;
    background-image: url(../images/about/next.png);
    background-size: cover;
    border: none;
    background-color: transparent;
    
    opacity: 0.3;
    transition: 0.1s;
}

.top-comment .prev {
    left: 0;
    transform: rotate(180deg);
}

.top-comment .next {
    right: 0;
}

.top-comment button:hover {
    opacity: 1;
}
.top-comment .index-bar {
    display: flex;
    justify-content: space-between;

    position: absolute;
    bottom: 1rem;
    left: calc(50% - 6rem);
    z-index: 1;

    width: 12rem;
    height: 2rem;

    /* background-color: black; */
}

.top-comment .index-dot {
    display: block;

    width: 2rem;
    height: 2rem;

    background-color: var(--white);

    border: 0.2rem solid var(--black-text);
    border-radius: 50%;
}

.top-comment .index-dot:hover {
    background-color: var(--primary-color);
}

.top-comment .index-dot.choosen {
    background-color: var(--secondary-color);
}

.top-comment .contain-comment-slide{
    position: relative;

    width: 100%;
    height: 54.5rem;

    overflow: hidden;

    /* background-color: lightgray; */
}

.top-comment article {
    position: absolute;
    top: 0;

    width: 100%;
    height: 52rem;
    padding-bottom: 4rem;

    /* background-color: #fff; */
}

/* animation xu ly cho js */
@keyframes moveSlideIn {
    100% {
        left: 0%;
    }
}

@keyframes moveSlideOutRight {
    100% {
        left: 100%;
    }
}

@keyframes moveSlideOutLeft {
    100% {
        left: -100%;
    }
}
/* end animation xu ly cho js */

.top-comment article img {
    width: 35rem;
    height: 35rem;
    margin: 1rem calc(50% - 17.5rem);

    border-radius: 50%;
    border: 0.2rem solid var(--black-text);
}

.top-comment .user-name {
    display: block;

    width: 100%;
    height: 3rem;

    /* background-color: blue; */
    color: var(--secondary-color);
    
    font-size: 2.2rem;
    line-height: 3rem;
    text-align: center;
    font-weight: bold;
    /* color: var(--main-color-2); */
}

.top-comment .comment {
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;

    max-width: 1024px;
    width: calc(100% - 4rem);
    height: 10rem;
    margin: 1rem auto 0;

    /* background-color: lightcyan; */

    font-size: 1.8rem;
    line-height: 2.5rem;
    color: var(--main-color-2);
    text-align: justify;
    text-align-last: center;
}

@media all and (max-width: 600px){
    /* company-strength css */
    .company-strength .content {
        width: 100%;
    }
    
    .company-strength img{
        width: calc(100% - 2rem);
        max-width: 60rem;
        height: auto;
        margin-top: 1rem;
    }

}

@media all and (max-width: 500px){
    /* top-comment css */
    .top-comment .contain-comment-slide{
        height: 57rem;
    }
    
    .top-comment article {
        height: 54.5rem;
    }

    .top-comment .comment {
        -webkit-line-clamp: 5;
        height: 12.5rem;
    
    }
}

@media all and (max-width: 400px){
    /* top-comment css */
    .top-comment .contain-comment-slide{
        height: 59.5rem;
    }
    
    .top-comment article {
        height: 57rem;
    }

    .top-comment .comment {
        -webkit-line-clamp: 6;
        height: 15rem;
    
    }
}
</style>


<body>
    <div class="col xl-11 lg-12 md-12">

    <div id="wrapper">
       
       
        <main>
            <section class="company-inf">
                <div class="heading">
                    <span>
                        THÔNG TIN CHUNG CÔNG TY 
                    </span>
                </div>
                <article>
                    <div class="title">
                        <span>
                            1. Thông tin công ty:
                        </span>
                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                Công ty Cổ Phần Hung Product
                            </li>
                           
                        </ul>
                    </div>
                </article>
                <article>
                    <div class="title">
                        <span>
                            2. Thông tin liên hệ:
                        </span>
                    </div>
                    <div class="content">
                        <ul>
                           
                            <li>
                                Liên lạc qua email: Truy cập  support hunghung12092005@gmail.com
                            </li>
                            
                            
                            <li>
                                Văn phòng chính: xóm trọ HDU
                                <div class="contain-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.680691902354!2d105.77401957473732!3d19.76871642986196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f87eb8b4c8c5%3A0x88d1e9c521aef3a9!2zVHLGsOG7nW5nIMSQYcyjaSBIb8yjYyBIw7TMgG5nIMSQxrDMgWM!5e0!3m2!1svi!2s!4v1723217098752!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen=""    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </li>
                        </ul>
                    </div>
                </article>

            </section>
            <section class="company-strength">
                <div class="heading">
                    <span>
                        NHỮNG ĐIỂM NỔI BẬT CỦA CÔNGTY
                    </span>
                </div>
                <article>
                    <div class="title">
                        <span>
                            1. Nhân lực hùng mạnh:
                        </span>
                    </div>
                    <div class="contain-content">
                        <div class="content">
                           
                        </div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYCLjYfQYX348n6XnjRCch5mmiG9eIPFnwLQ&s" alt="">
                    </div>
                </article>
                <article>
                    <div class="title">
                        <span>
                            2. Sản phẩm đa dạng:
                        </span>
                    </div>
                    <div class="contain-content">
                        <div class="content">
                            <ul>
                                <li>
                                    Công ty  chuyên kinh doanh: Sách quốc văn, ngoại văn                  
                                </li>
                                <li>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat impedit delectus vero fugiat laboriosam dolorum tenetur reiciendis, odit adipisci! Molestiae, soluta expedita ullam magnam nisi architecto iusto hic nulla itaque.                         
                                </li>
                                <li>
                                    Sách ngoại văn bao gồm: từ điển, giáo trình, tham khảo, truyện tranh 
                                    thiếu nhi , sách học ngữ, từ vựng, ngữ pháp, luyện thi TOEFL, TOEIC, IELS…
                                </li>
                            </ul>
                        </div>
                        <img src="https://img.lovepik.com/photo/50041/7767.jpg_wh860.jpg" alt="">
                    </div>
                </article>
                <article>
                    <div class="title">
                        <span>
                            3. Uy tín, chất lượng:
                        </span>
                    </div>
                    <div class="contain-content">
                        <div class="content">
                            <ul>
                                <li>
                                   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est quaerat ducimus odio illo qui animi cumque aperiam? Pariatur praesentium impedit molestias facilis, quaerat culpa laudantium beatae error sit! Aspernatur, debitis.         
                                </li>
                                <li>
                                    Năm 2004 Công ty đã được Cục Sở hữu Trí tuệ Việt Nam công nhận sở hữu độc 
                                    quyền tên thương hiệu .                     
                                </li>
                            </ul>
                        </div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYCLjYfQYX348n6XnjRCch5mmiG9eIPFnwLQ&s" alt="">
                    </div>
                </article>
            </section>
            
            </div>

</body>
</html>