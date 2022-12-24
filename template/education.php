<!-- Education-->
<section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                        <?php
                            foreach($wrappedData["education"] as $education){
                                $box = <<<EDUBOX
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">
                                    $education[university]
                                    </h3>
                                    <div class="subheading mb-3">
                                    $education[grade]
                                    </div>
                                    <div>
                                    $education[major]
                                    </div>
                                    <p>
                                    GPA: $education[GPA]
                                    </p>
                                </div>
                                <div class="flex-shrink-0"><span class="text-primary">
                                $education[fromDate] - $education[toDate]
                                </span></div>
                                </div>
                                EDUBOX;
                             echo $box;
                            }   
                        ?> 
                </div>
            </section>
            <hr class="m-0" />