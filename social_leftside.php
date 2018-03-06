
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
        position:absolute;        
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
        padding: 2px 20px;
    }
    .leftside li:nth-child(1){
        background: #3b5998;
    }
    .leftside li:nth-child(2){
        background: #00c300;
    }
    .leftside li:nth-child(3){
        background: #d34836;
    }
    .leftside li:nth-child(4){
        background: #075e54;
    }
    .leftside li:nth-child(5){
        background: #00aced;
    }
    .leftside li:nth-child(6){
        background: #0eb419;
    }
       
    .leftside li:nth-child(7){
        background: #d6249f;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
        box-shadow: 0px 3px 10px rgba(0,0,0,.25);
    }
</style>

<div class="row">
    <div class="leftside hidden-md hidden-sm hidden-xs">
        <ul>
            <li  style="border-top:2px solid !important; border-color:red !important;"><i class="text-center fab fa-facebook-square"></i></li>
            <li><i class="text-center fab fa-line"></i></li>
            <li><i class="text-center fab fa-google-plus-square"></i></li>            
            <li><i class="text-center fab fa-whatsapp"></i></li>
            <li><i class="text-center fab fa-twitter"></i></li>     
            <li><i class="text-center fab fa-weixin"></i></li>                   
            <li><i class="text-center fab fa-instagram"></i></li>
        </ul>
    </div>
</div>