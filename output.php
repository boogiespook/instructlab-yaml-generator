<html>
<head>
<link rel="stylesheet" href="style.css">
<title>YAML Generator</title>    
</head>
<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
        <div class="title">
         InstructLab YAML Generator
    </div>
        <div class="formbold-steps">
            <ul>
                <li class="formbold-step-menu3 active">
                    <span>3</span>
                    YAML Output
                </li>
            </ul>
        </div>

        
        <div class="formbold-form-step-3 active">
          <div class="formbold-form-confirm">
            <p>
                <?php

print "<pre>";

parse_str($_SERVER["QUERY_STRING"], $data);
                function limitSize($input) {
                    $newtext = wordwrap($input, 50, "\n", TRUE);
                    $splitArr = preg_split("/\r\n|\n|\r/", $newtext);
                    $arrCount = count($splitArr);
                    if ($arrCount > 1) {
                      ## Loop through the array and print each line with 8 space padding
                      foreach ($splitArr as $line) {
                        printf("%6s","");
                        print $line . "\n";
                      }
                    } else {
                    printf("%6s","");
                    print $newtext;
                    }
                }
                print '---';
                print '<br>task_description: |<br>';
                limitSize($data['skillname']);
                print '<br>created_by:';
                print "&nbsp;"; 
                print $data['githubuser'];
                print "<br>seed_examples:";
                for($i=1; $i < 6; $i++) {
                    $question = $data['q' . $i];
                    $answer = $data['a' . $i];
                if (!empty($question)) {
                    print "<br>  - question: |<br>";
                    limitSize($question);
                    print "<br>";
                    printf("%4s","");
                    print "answer: |<br>";
                    #printf("%4s","");
                    limitSize($answer);
                }
            }
            print "<br>attribution:<br>";
            printf("%4s","");
            print "- source: self-authored<br>";
            printf("%6s","");
            print "license: Apache-2.0";
            print "</pre>";
                ?>
            </p>
            <div>
            </div>
          </div>
        </div>
<br>
<p class="blueText">
            If you would like to double check your generated YAML, copy and paste the above into <a href="https://www.yamllint.com/" target=_blank>YAML Lint</a>
</p>
<br>
        <a href="index.php" style="text-decoration:none">
        <button class="formbold-btn">
              Start Over
              <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
              </g>
              <defs>
              <clipPath id="clip0_1675_1807">
              <rect width="16" height="16" fill="white"/>
              </clipPath>
              </defs>
              </svg>
          </button></a>
        <div class="formbold-form-btn-wrapper">

        </div>
  </div>
</div>

</html>
