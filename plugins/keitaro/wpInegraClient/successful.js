document.addEventListener('DOMContentLoaded', function () {
    
    document.addEventListener('submit', function (event) {
        event.preventDefault();
        
        var $that   = event.target;
        var $inputs = $that.querySelectorAll('input');
        var $select = $that.querySelectorAll('select');
        var $btn    = $that.querySelectorAll('button');

        $btn[0].setAttribute('disabled', true)
        $btn[0].style.background = 'gray'

        params = {
            path: '<?=$path?>',
            pixels: '<?=$pixels?>',
            arb: '<?=$arbName?>',
            clickid: '<?=$client->getSubId()?>',
        }

        var isChcec = true
        $inputs.forEach(function(input) {

            if ( input.name === 'phone') { 
                var res = input.value.split('_').length > 1
                if (res) {
                    // console.log('res:', res)
                     
                    return isChcec = false
                }
            }

            // urlsuccess+= input.name + "=" + input.value + "&"
            params[input.name] = input.value

        })

        $select.forEach(function(select) {

            params[select.name] = select.value

        })

        
        fetch('https://quotes-me.com/successful.php?params=' + JSON.stringify(params) + '&' + window.location.search.substring(1))
        .then(x => x.text().then(x => {
            
            if(!x) {
                console.log('huy')

                var $that   = event.target;
                var $inputs = $that.querySelectorAll('input');
                $inputs.forEach(function(input) {
                    // console.log()
                    if (input.name === 'phone') input.style.borderColor = 'red'
                })

                $btn[0].removeAttribute('style')
                $btn[0].removeAttribute('disabled')
                return
            }
            document.open();
            document.write(x);
            document.close();
            return;
        }))

    })
})
