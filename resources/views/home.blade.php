@extends('layouts.mainlayout')

@section('content')
    <body class="w3-theme-l5">



    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <!-- The Grid -->
        <div class="w3-row">
            <!-- Left Column -->
            <div class="w3-col m3">
                <!-- Profile -->
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container">
                        <h4 class="w3-center">{{Auth::user()->name}}</h4>
                        <p class="w3-center"><img src="photos/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                        <hr>
                        <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i> Bouroudi Abdelmounaim</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Algeria, Jijel</p>
                        <p><i class="fa fa-map-marker fa-fw w3-margin-right w3-text-theme"></i><a href="https://goo.gl/maps/mJtHECiuEG32" target="_blank"> Jedda, SA</a></p>
                    </div>
                </div>
                <br>

                <!-- Accordion -->
                <div class="w3-card w3-round">
                    <div class="w3-white">
                        <button class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-user-md fa-fw w3-margin-right"></i>My Profile</button>
                        <div id="Demo1" class="w3-hide w3-container">
                            <p>Some text..</p>
                        </div>
                        <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Groups</button>
                        <div id="Demo2" class="w3-hide w3-container">
                            <p>Group1</p>
                        </div>
                        <button class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-cogs fa-fw w3-margin-right"></i>Settings</button>
                        <div id="Demo3" class="w3-hide w3-container">
                            <div class="w3-row-padding">
                                <br>
                                <div class="w3-half">
                                    <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <!-- Interests -->
                <div class="w3-card w3-round w3-white w3-hide-small">
                    <div class="w3-container">
                        <p>Interests</p>

                    </div>
                </div>
                <br>

                <!-- Alert Box -->
                <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
                    <p><strong>Hey!</strong></p>
                    <p>People are looking at your profile. Find out who.</p>
                </div>

                <!-- End Left Column -->
            </div>

            <!-- Middle Column -->
            <div class="w3-col m7">

                <div class="w3-row-padding">
                    <div class="w3-col m12">
                        <div class="w3-card w3-round w3-white">
                            <div class="w3-container w3-padding">
                                <h4 class="w3-opacity">Post something ... </h4>
                                <div class="w3-row-padding">

                                    <div class="w3-half">
                                        <div class="w3-card-2">

                                            <header class="w3-container w3-light-grey">
                                                <h3>Sharing overlefting ...</h3>
                                            </header>

                                            <div class="w3-container">
                                                <img src="photos/leftovers-containers.jpg" alt="Safe food to share" style="width:100%" title="Safe food to share">
                                            </div>
                                            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-block" style="background-color: #4d636f">+ Share</button>

                                            <div id="id01" class="w3-modal">
                                                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                                                    <div class="w3-center"><br>
                                                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                                        <div class="kv-avatar">

                                                        </div>
                                                    </div>

                                                    <form class="w3-container" action="/action_page.php">
                                                        <div class="w3-section">
                                                            <label><b>Food Name</b></label>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Food Name" name="foodName" required>

                                                            <label><b>Food Origine</b></label>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Food Origine" name="foodOrigine" required>
                                                            <label><b>Time Since Cooked</b></label>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Time Since Cooked" name="timeCooked" required>

                                                            <label><b>Food photo</b></label>
                                                            <div class="file-loading">
                                                                <input id="avatar-2" name="avatar-2" type="file" required>
                                                            </div>

                                                            <label><b>Your location</b></label>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Your Location" name="location" required>

                                                            <button class="w3-button w3-block w3-section w3-padding" style="background-color: #4d636f" type="submit">Post</button>
                                                        </div>
                                                    </form>

                                                    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                                        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="w3-half">
                                        <div class="w3-card-2">

                                            <header class="w3-container w3-light-grey">
                                                <h3>Collaborating ...</h3>
                                            </header>

                                            <div class="w3-container">
                                                <img src="photos/people-at-table-with-food.jpg" alt="Safe food to share" style="width:100%" title="Safe food to share">
                                            </div>


                                            <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-block" style="background-color: #7ca9b6">+ Collaborate</button>

                                            <div id="id02" class="w3-modal">
                                                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                                                    <div class="w3-center"><br>
                                                        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                                        <div class="kv-avatar">

                                                        </div>
                                                    </div>

                                                    <form class="w3-container" action="/action_page.php">
                                                        <div class="w3-section">
                                                            <label><b>Number Of Collaborating you</b></label>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Food Name" name="numbercollaborating" required>

                                                            <label><b>Your Origine</b></label>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Food Origine" name="origine" required>

                                                            <label><b>Your location</b></label>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Your Location" name="location" required>

                                                            <label><b>Short Description</b></label>
                                                            <textarea class="w3-input w3-border w3-margin-bottom" placeholder="Describe exactely what you want" name="description"></textarea>



                                                            <button class="w3-button w3-block w3-section w3-padding" style="background-color: #7ca9b6" type="submit">Post</button>
                                                        </div>
                                                    </form>

                                                    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                                        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                    <img src="photos/avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                    <span class="w3-right w3-opacity">1 min</span>
                    <h4>Abdou</h4><br>
                    <span class="w3-opacity description">chouraba - 7:30 PM Today</span>
                    <hr class="w3-clear">
                    <label><b class="left-text">Time since cooked : </b> 40 min</label><br>
                    <label><b class="left-text">Location : </b>jedda, SA</label>
                    <br/>
                    <p>This is a chouraba made made just 40 min from now, it's with a medium salt and there is a left quantity for two persons, for all those who are interested please contact me </p>
                    <div class="w3-row-padding" style="margin:0 -16px">
                        <div class="w3-half">
                            <img src="photos/chorba-frik-soupe-algerienne.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                        </div>
                        <div class="w3-half">
                            <img src="photos/download.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                        </div>
                    </div>
                    <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-arrow-right"></i>  Take It</button>

                    <div id="id03" class="w3-modal">
                        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                            <div class="w3-center"><br>
                                <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                <div class="kv-avatar">

                                </div>
                            </div>

                            <form class="w3-container" action="/action_page.php">
                                <div class="w3-section">
                                    <label><b> Quantity you want to take : </b></label>

                                    <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Enter person number" max="2" min="1" name="numbercollaborating" required>

                                    <button class="w3-button w3-block w3-section w3-padding" style="background-color: #7ca9b6" type="submit">Confirm taking this meal</button>
                                </div>
                            </form>

                            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                <button onclick="document.getElementById('id03').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                            </div>

                        </div>
                    </div>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
                    <p contenteditable="true" class="w3-border w3-padding float-lg-right"></p>
                </div>



                <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                    <img src="photos/avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                    <span class="w3-right w3-opacity">16 min</span>
                    <h4>Sidali</h4><br>
                    <hr class="w3-clear">
                    <p>On cherche une collaboration pour cette perdiode d'el hajj pour s'aider dans la prépation des repars pour toute personne intéressé veuillez me contacter</p>
                    {{--<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>--}}
                    {{--<button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>--}}

                    <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-yelp"></i>  Collaborate</button>

                    <div id="id04" class="w3-modal">
                        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                            <div class="w3-center"><br>
                                <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                <div class="kv-avatar">

                                </div>
                            </div>

                            <form class="w3-container" action="/action_page.php">
                                <div class="w3-section">
                                    <label><b>How much money could you collaborate with every day : </b></label>

                                    <input class="w3-input w3-border w3-margin-bottom" placeholder="Enter person number"  name="money to give everyday" type="number" required>

                                    <button class="w3-button w3-block w3-section w3-padding" style="background-color: #7ca9b6" type="submit">Confirm collaborating</button>
                                </div>
                            </form>

                            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                <button onclick="document.getElementById('id04').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                            </div>

                        </div>
                    </div>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
                    <p contenteditable="true" class="w3-border w3-padding float-lg-right"></p>
                </div>




                <!-- End Middle Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-col m2">
                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container">
                        <p>Upcoming Events:</p>
                        <img src="photos/avatar3.png" alt="Forest" style="width:100%;">
                        <p><strong>Holiday</strong></p>
                        <p>Friday 15:00</p>
                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                    </div>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container">
                        <p>Friend Request</p>
                        <img src="photos/avatar3.png" alt="Avatar" style="width:50%"><br>
                        <span>{{Auth::user()->name}}</span>
                        <div class="w3-row w3-opacity">
                            <div class="w3-half">
                                <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
                            </div>
                            <div class="w3-half">
                                <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
                    <p>ADS</p>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
                    <p><i class="fa fa-bug w3-xxlarge"></i></p>
                </div>

                <!-- End Right Column -->
            </div>

            <!-- End Grid -->
        </div>
    </div>
@endsection
