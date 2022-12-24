<!-- Skills-->
<section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <?php
                    $dataType = 0;
                    foreach($wrappedData["skills"] as $skill){
                        echo'<div class="subheading mb-3">'.$skill["title"];
                        if($dataType === 0){
                                echo '<ul class="list-inline dev-icons">';
                            foreach($skill['items'] as $item){
                                echo '
                                <li class="list-inline-item"><i class="fab fa-'.$item.'"></i></li>
                                ';
                            }
                            echo '</ul></div>';
                        }else{
                            echo '<ul class="fa-ul mb-0">';
                            foreach($skill['items'] as $item){
                                echo '<li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                '.$item.'
                                </li>';
                            }
                            echo '</ul>';
                        }
                        $dataType++;
                    }
                    ?>
            </section>
            <hr class="m-0" />