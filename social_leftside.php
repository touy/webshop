<link rel="stylesheet" href="css/newbootstrap.css">
<style type="text/css">
    *{
        padding:0px;
        margin:0px;        
    }
 
    .leftside ul{
        /* width:100px; */
        position:absolute;
        overflow:hidden;
    }
    .leftside{
        /* position:absolute;    */
        float:right;     
    }
    .leftside li{
        list-style-type: none;
        padding: 2px; 
        transition: .6s;
        color:white;
        position:relative;
        font-size:40px;
        cursor:pointer;
    }
    .leftside li:hover{
        padding: 2px 18px;
    }
    .bg_facebook li:nth-child(1){
        background: #3b5998;
    }
    .bg_line li:nth-child(1){
        background: #00c300;
    }
    .bg_google li:nth-child(1){
        background: #d34836;
    }
    .bg_whatsapp li:nth-child(1){
        background: #075e54;
    }
    .bg_twitter li:nth-child(1){
        background: #00aced;
    }
    .bg_wechat li:nth-child(1){
        background: #0eb419;
    }
       
    .bg_instagram li:nth-child(1){
        background: #d6249f;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
        box-shadow: 0px 3px 10px rgba(0,0,0,.25);
    }
</style>

<div class="row hidden-xs">
    <div class="leftside hidden-md hidden-sm hidden-xs">
        <ul>
            <a href="https://www.facebook.com/" class="bg_facebook"><li  style="border-top:2px solid !important; border-color:red !important;"><i class="text-center fab fa-facebook-square"></i></li></a>
            <a href="https://line.me/th/" class="bg_line"><li><i class="text-center fab fa-line"></i></li></a>
            <a href="https://www.google.co.th/" class="bg_google"><li><i class="text-center fab fa-google-plus-square"></i></li></a>            
            <a href="https://www.whatsapp.com/?l=th" class="bg_whatsapp"><li><i class="text-center fab fa-whatsapp"></i></li></a>
            <a href="https://twitter.com/?lang=th" class="bg_twitter"><li><i class="text-center fab fa-twitter"></i></li></a>     
            <a href="https://www.wechat.com/th/" class="bg_wechat"><li><i class="text-center fab fa-weixin"></i></li></a>                   
            <a href="https://www.instagram.com/?hl=th" class="bg_instagram"><li><i class="text-center fab fa-instagram"></i></li></a>
        </ul>
    </div>
</div>