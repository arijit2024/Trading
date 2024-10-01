




 $(document).ready(function(){
            const api_url = "../back-end/server.php";
            
            $("#submit-data").click(function(event){


                document.getElementById('submit-data').addEventListener('click', function() {
                    const inputs = document.querySelectorAll('.fildAll');
                
                    inputs.forEach(input => {
                        input.style.borderColor = '';
                        if (input.value.trim() === '') {
                            input.style.borderColor = 'red'; // Highlight in red
                            allFilled = false; // Set flag to false if any input is empty
                        }else{
                            let entry = $("#entry").val();
                            let stoploss = $("#stoploss").val();
                            let exit = $("#exit").val();
                            let profit = $("#profit").val();
                            let loss = $("#loss").val();


                                $.post(api_url, {
                                    method : "dataOne",
                                    entry : entry,
                                    stoploss : stoploss,
                                    exit : exit,
                                    profit : profit,
                                    loss : loss
                                }, function(data){
                                    console.log(data);
                                })
                        }
                    });
                });


                


            })
        })