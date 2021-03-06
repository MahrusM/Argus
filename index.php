<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<meta http-equiv="refresh" content="15;url=engine.php" />
<div class="container">
    <div class="content">
        <h2 class="frame-1">Social Network Analysis Tools</h2>
        <h2 class="frame-2">By ITB</h2>
        <h2 class="frame-3">dan Ipin</h2>
        <h2 class="frame-5"><span>Ar</span><span>Gus</span><span><i class="fa fa-eye fa-2x"></i></span></h2>
</div>
<style>
body {
    background: #310404;
    font-family: 'Roboto Condensed', sans-serif;
}

.container {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    z-index: 0;
    background: -webkit-radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.7));
    background: -moz-radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.7));
    background: -ms-radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.7));
    background: radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.7));
}
.content {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0px;
    top: 0px;
    z-index: 1000;
}
.container h2 {
    position: absolute;
    top: 50%;
    line-height: 100px;
    height: 100px;
    margin-top: -50px;
    font-size: 100px;
    width: 100%;
    text-align: center;
    color: transparent;
    animation: blurFadeInOut 3s ease-in backwards;
}
.container h2.frame-1 {
    animation-delay: 0s;
}
.container h2.frame-2 {
    animation-delay: 2.5s;
}
.container h2.frame-3 {
    animation-delay: 5s;
}
/* .container h2.frame-4 {
    font-size: 200px;
    animation-delay: 2.5s;
} */
.container h2.frame-5 {
    animation: none;
    color: transparent;
    text-shadow: 0px 0px 1px #fff;
}
.container h2.frame-5 span {
    animation: blurFadeIn 3s ease-in 9s backwards;
    color: transparent;
    text-shadow: 0px 0px 1px #fff;
}
.container h2.frame-5 span:nth-child(2) {
    animation-delay: 10s;
}
.container h2.frame-5 span:nth-child(3) {
    animation-delay: 11s;
}

@keyframes blurFadeInOut{
    0%{
        opacity: 0;
        text-shadow: 0px 0px 40px #fff;
        transform: scale(0.9);
    }
    20%,75%{
        opacity: 1;
        text-shadow: 0px 0px 1px #fff;
        transform: scale(1);
    }
    100%{
        opacity: 0;
        text-shadow: 0px 0px 50px #fff;
        transform: scale(0);
    }
}
@keyframes blurFadeIn{
    0%{
        opacity: 0;
        text-shadow: 0px 0px 40px #fff;
        transform: scale(1.3);
    }
    50%{
        opacity: 0.5;
        text-shadow: 0px 0px 10px #fff;
        transform: scale(1.1);
    }
    100%{
        opacity: 1;
        text-shadow: 0px 0px 1px #fff;
        transform: scale(1);
    }
}
@keyframes fadeInBack{
    0%{
        opacity: 0;
        transform: scale(0);
    }
    50%{
        opacity: 0.4;
        transform: scale(2);
    }
    100%{
        opacity: 0.2;
        transform: scale(5);
    }
}
</style>