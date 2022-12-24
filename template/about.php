<!-- About-->
<section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <?=$wrappedData['name'] ?>
                        <span class="text-primary"><?=$wrappedData['family'] ?></span>
                    </h1>
                    <div class="subheading mb-5">
                    <?=$wrappedData['address'] ." . ". $wrappedData['tell'] ?>
                        <a href="mailto:<?=$wrappedData['email'] ?>"><?=$wrappedData['email'] ?></a>
                    </div>
                    <p class="lead mb-5">
                    <?=$wrappedData['aboutText'] ?>
                    </p>
                    <div class="social-icons">
                        <?php
                        foreach($wrappedData['socialMedia'] as $sm_Key => $sm_URL){
                            echo '<a class="social-icon" href="'.$sm_URL.'"><i class="fab fa-'.$sm_Key.'"></i></a>';
                        }
                        ?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />