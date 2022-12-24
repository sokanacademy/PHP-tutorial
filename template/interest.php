<!-- Interests-->
<section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <?php
                    foreach($wrappedData["interests"] as $interest){
                        echo '<p>
                            '.$interest.'
                        </p>';
                    }
                    ?>
                </div>
            </section>
            <hr class="m-0" />