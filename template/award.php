
<!-- Awards-->
<section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <?php
                        foreach($wrappedData["awards"] as $award){
                            $awardBox = <<<AWARDS
                            <li>
                                <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                                $award
                            </li>
                            AWARDS;

                            echo $awardBox;
                        }
                        ?>
                    </ul>
                </div>
            </section>
        </div>
        <hr class="m-0" />