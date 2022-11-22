<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,700;1,800&display=swap');

    body {
        margin: 0;
        font-family: 'Open Sans', sans-serif;
    }

    a {
        color: white;
    }

    h1 {
        font-weight: 400;
    }

    .d1s {
        animation-delay: 1000ms;
    }

    .d2s {
        animation-delay: 2000ms;
    }

    .fadeIn {
        opacity: 0;
        animation: fadeIn 1s forwards;
        -webkit-animation: fadeIn 1s forwards;
        -moz-animation: fadeIn 1s forwards;
        -o-animation: fadeIn 1s forwards;
        -ms-animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(80px);
    }
    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}
</style>

<div style="color: #f5f5f5;background-color: #252525; height: 100vh; width: 100vw; margin: auto; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h1 class="fadeIn">Hello!</h1>
    <p class="fadeIn">Thanks for checking out my artic.edu Laravel test site :)</p>
    <br><a class="fadeIn" href="/events">Go To Events</a>
</div>
