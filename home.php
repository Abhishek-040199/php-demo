<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voice_Home</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.2.0/p5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.2.0/addons/p5.sound.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
</head>

<body style="background-color: black;">
    <div class="row">
        <div class="col-lg-10">
            <div id="actual" style="width: 100%;padding-bottom: 10px;">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 col-xs-12">
                        <h1 class="lot"
                            style="color: rgb(250, 217, 217);font-size: 40px;font-weight: bold;margin-top: 10px;margin-left: 10px;"
                            align="center">
                            ALEXA</h1>
                    </div>
                    <div class="col-lg-8 col-sm-12 col-xs-12" align="center">
                        <div style="margin-top: 10px;">
                            <button
                                style="height: 50px;border-radius: 10px 0 0 10px;background-color: black;border: 1px solid cyan;font-size: 15px;padding: 13px;padding-left: 20px;"><i
                                    class="fa fa-search" aria-hidden="true"
                                    style="font-size: 17px;color:rgb(0, 217, 255);"></i></button><span><input
                                    type="text" id="search-input" placeholder="Search in Drive"
                                    style="border-radius: 0 10px 10px 0;padding: 13px;border: 1px solid cyan;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-sm-12 col-xs-12" align="center">
            <h3 style="margin-top: 10px;color: cyan;font-weight: bold;">Instructions to use</h3><br>
            <div style="text-align: left;padding-left: 20px;padding-right: 20px;margin-top: -10px;">
                <h5 style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sed eligendi
                    rerum, in consequuntur
                    explicabo doloremque voluptate, quidem velit nesciunt nihil? Cupiditate veritatis quia porro hic
                    culpa
                    odit atque nisi!</h5><br>
            </div>
        </div>
        <div class="col-lg-8 col-sm-12 col-xs-12">
            <iframe id="searchbox" src="" title="W3Schools Free Online Web Tutorials"
                style="height: 480px;width: 92%;border: 2px solid cyan;border-radius: 2px;margin-left: 4%;margin-right: 4%;"></iframe>
            <h1></h1>
        </div>
        <div class="col-lg-2 col-sm-12 col-xs-12" style="margin-bottom: 100px;">
            <h3 style="margin-top: 10px;color: cyan;font-weight: bold;" align="center">Instructions to use</h3><br>
            <div class="container">
                <div class="chat-container">
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text </p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                    <div class="message">
                        <p>A message text</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <script>
        const searchInput = document.querySelector("#search-input");
        searchInput.addEventListener("keydown", function (event) {
            if (event.code === "Enter") {
                searchtyping();
            }
        });
        let link;
        function searchtyping() {
            let input = searchInput.value;
            if (input.substring(0, 4) == 'www.' && input.substring(input.length - 4, input.length) == ".com") {
                document.getElementById("searchbox").src = "https://" + input;
            }
            else {
                document.getElementById("searchbox").src = "https://www.google.com/search?q=" + input + "&rlz=1C5CHFA_enNZ948NZ948&oq=" + input + "&aqs=chrome.0.69i59l2j46i175i199i433j46i199i291i433j46j0i433j0j69i60.875j0j9&sourceid=chrome&ie=UTF-8";
            }
        }


    </script>
</body>

</html>