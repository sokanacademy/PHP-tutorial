<!-- Experience-->
<section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <?php
                    foreach($wrappedData["experience"] as $experience){
                        $box = <<<EXPBOX
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                            $experience[position]
                            </h3>
                            <div class="subheading mb-3">
                            $experience[company]
                            </div>
                            <p>
                            $experience[jobDetails]
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">
                        $experience[fromDate]
                        - 
                        $experience[toDate]
                        </span></div>
                        </div>
                    EXPBOX;
                    echo $box;
                    }
                    ?>
                </div>
            </section>
            <hr class="m-0" />