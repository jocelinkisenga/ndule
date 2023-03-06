
var products__container = document.querySelectorAll('.products__container button')

for(var i = 0; i < products__container.length; i++){
    products__container[i].addEventListener('click', function(e){

        var article_contenu = this.parentNode        
        var articles = this.parentNode.parentNode.parentNode.parentNode
        
        if(article_contenu.classList.contains('active')){
            return false
        }
        for(var j = 0; j < products__container.length; j++){
            products__container[j].parentNode.classList.remove('active')
            products__container[j].parentNode.querySelector('.song .audio').pause()
        }
        
        article_contenu.classList.add('active')
        var audio = article_contenu.querySelector('.audio')

        var stp = article_contenu.querySelector('.in_play')
        var pse = article_contenu.querySelector('.in_pause')
        stp.addEventListener('click', function () {
            stopper_la_lecture()
        })
        pse.addEventListener('click', function () {
            activer_la_lecture()
        })
        function stopper_la_lecture(){
            audio.pause()
            stp.classList.add('active')
            pse.classList.add('active')
        }
        function activer_la_lecture(){
            audio.play()
            pse.classList.remove('active')
            stp.classList.remove('active')
        }
        
        var temps = article_contenu.querySelector('.temps')
        audio.play()

        // bouton pour faire avancer la barre
        audio.addEventListener('timeupdate', (e)=>{
            const currentTime = e.target.currentTime;
            const duration = e.target.duration;
            let progressWidth = (currentTime / duration) * 100;

            //le temps d'avancement de la lecture de la chançon
            temps.style.width = `${progressWidth}%`;

            let d_min = article_contenu.querySelector('.progression .courant_min')
            let t_min = article_contenu.querySelector('.progression .total_min')

            let la_duree = audio.duration
            let total_m = Math.floor(la_duree / 60)
            let total_s = Math.floor(la_duree % 60)
            if(total_s < 10){
                total_s = `${total_s}`
            }
            t_min.innerText = `${total_m+ "m"}`
            d_min.innerText = `${total_s+ "s"}`


            let cour_m = Math.floor(currentTime / 60)
            let cour_s = Math.floor(currentTime % 60)
            if(cour_s < 10){
                cour_s = `${cour_s}`
            }
            // t_min.innerText = `0${cour_m+ "m"}`
            d_min.innerText = `${cour_s+ "s"}`

            
        })

        let barre = temps.parentNode
        barre.addEventListener('click', function (e) {
            let barre_width = barre.clientWidth
            let clickedOffsetx = e.offsetX 
            let duree_chant = audio.duration
            audio.currentTime = (clickedOffsetx / barre_width) * duree_chant
            audio.play()
            if(!stp.classList.contains('active')){
                stp.classList.add('active')
                pse.classList.add('active')
            }
            stp.classList.remove('active')
            pse.classList.remove('active')
        })

    })
}