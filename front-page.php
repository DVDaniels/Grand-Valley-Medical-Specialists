<?php get_header(); ?>

<body>
    <div class="main-hero">
        <img src="<?php echo get_theme_file_uri('/images/Group_2-removebg.png') ?>" alt="Staff Picture">
        <div class="welcome">Welcome to Grand Valley Medical Specialists!</div>
    </div>

    <div class="container">
        <a name="about"></a>
        <div class="news">

        <div class="newstext b1">
                <h1 class="headline"><i class="fas fa-clinic-medical"></i> About Us</h1>
                <img src="<?php echo get_theme_file_uri('/images/medical-hero.jpg') ?>" alt="latest news">
                <p>At Grand Valley Medical Specialists our goal is to provide our patients with the best experience possible when
                    interacting with our practice. That’s why we’re pleased to offer secure, interactive patient self-service
                    features
                    that
                    let you communicate with us from the convenience of your home or office.
                    <br>
                    <br>
                    <a href="#" target="_blank">&rarr; Read More...</a>
                </p>
            </div>
            <br>
            <hr id="location-break">

            <div class="newstext">
                <h1 class="headline"><i class="far fa-newspaper"></i> Latest News</h1>
                <img src="<?php echo get_theme_file_uri('/images/screening.jpg') ?>" alt="latest news">
                <p> <strong>Before coming to the office for your scheduled appointment please read the statement below.</strong><br><br>
                Do not come into the office if you are experiencing any of the following symptoms: <br><br>
                New or worsening cough, new or worsening shortness of breath, fever of 100.0 degrees or higher, chills, body aches, loss
                of taste and smell, sore throat, new nasal drainage, sinus pain/pressure, fatigue, loss of appetite, diarrhea, nausea,
                or abdominal pain. If you have any of the above symptoms, please call our office for recommendations.
                <br><br>
                No visitors are allowed to accompany patients in the office unless you are a parent of a minor, or you are a patient
                that has a physical dependence on another or you are unable to communicate, hear or remember details. All patients will
                be screened at the front door before entering. Please bring your own mask as one is required upon entering the office.
                If you do not have a mask, one will be available at the front door.
                <br><br>
                See our COVID-19 Preparedness Plan. It is posted at the check-in at both practices. Patients will be provided with a
                copy upon request. If you have any questions or concerns, please call our clinical staff at 616-459-3158. Thank you,
                Grand Valley Medical Specialists
                <br>
                </p>
            </div>            
        </div>

            <div class="header-wrapper">
                <a name="locations"></a>
                <h2 id="center"><i class="fas fa-compass"></i> Locations</h2>
                <hr id="location-break">
            </div>

        <div class="squares-wrapper">
            
            <div class="squares">
                <div class="square">
                    <div class="img-wrapper">
                        <img src="<?php echo get_theme_file_uri('/images/national.jpg') ?>" alt="Mayo Clinic">
                    </div>
        
                    <div class="square-text-wrapper">
                        <h1>East Paris — SE Grand Rapids</h1>
                        <p>The East Paris office is at 1000 East Paris Ave., SE, Suite 100, Grand Rapids, MI 49546.</p>
                        <br>
                        <p><strong>East Paris is open 7:30am-5:30pm. Saturday labs are closed.</strong></p>
                    </div>
                </div>
        
        
                <div class="square">
                    <div class="square-text-wrapper">
                        <h1>Health Park — Wyoming.</h1>
                        <p>The Health Park office is located in the Health Park Building at 2093 Health Drive SW, Suite 200, in Wyoming. This
                        office is east of Byron Center Avenue off Gezon Parkway, in the Metro Health Village.</p>
                        <br>
                        <p><strong>Health Park office is open 8am-5pm.</strong></p>
                    </div>
        
                    <div class="img-wrapper l2">
                        <img src="<?php echo get_theme_file_uri('/images/solen.jpg') ?>" alt="Hospital">
                    </div>
                </div>
            </div>
        </div>
    
</body>


<?php get_footer(); ?>