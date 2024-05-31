let valueAnimation = document.querySelectorAll(".num");

let interval = 7000;

valueAnimation.forEach((valueAnime) =>
    {
            let startValue = 0;
            let endValue = parseInt(valueAnime.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);

            let counter = setInterval(function()
            {
                    startValue +=2;
                    valueAnime.textContent = startValue;

                    if(startValue == endValue)
                        {
                            clearInterval(counter);
                        }

            }, duration);
    
    });





