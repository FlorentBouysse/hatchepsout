const app = {
    init: function () {
        const images = document.querySelectorAll('.img');
        for ( const img of images ) {
            img.addEventListener('click', app.handleClick);
        }
    },

    handleClick: function (event) {
        console.log('je suis la');
        console.log(event.target);
        const btn = event.target;
        
        btn.classList.toggle('modal');
    }
}

document.addEventListener('DOMContentLoaded', app.init);