<html>
<head>
<script src="https://kit.fontawesome.com/8a8c57f9cf.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<title>InstructLab YAML Generator</title>
    
</head>
<body>
<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <form action="output.php">
        <div class="title">
        InstructLab YAML Generator
    </div>
        <div class="formbold-steps">
            <ul>
                <li class="formbold-step-menu1 active">
                    <span>1</span>
                    Enter Details
                </li>
                <li class="formbold-step-menu2">
                    <span>2</span>
                    Enter Questions
                </li>
                <li class="formbold-step-menu3">
                    <span>3</span>
                    YAML Output
                </li>
            </ul>
        </div>

        <div class="formbold-form-step-1 active">
        <div class="formbold-input-flex">
            <div>
                <label for="githubuser" class="formbold-form-label"> Github User </label>
                <input
                type="text"
                name="githubuser"
                placeholder="MyGithubUserName"
                id="githubuser"
                class="formbold-form-input" required
                />
            </div>
            <div>
                <label for="skillname" class="formbold-form-label"> Skill Name </label>
                <input
                type="text"
                name="skillname"
                placeholder="A New skill to do XYZ"
                id="skillname"
                class="formbold-form-input" required
                />
            </div>
          </div>        
          
     
        </div>

        <div class="formbold-form-step-2">
        <div class="formbold-input-flex">
             <div>
                <label for="q1" class="formbold-form-label"> Question 1</label>
                <input
                type="text"
                name="q1"
                placeholder=""
                id="q1"
                class="formbold-form-input"
                />
            </div>
            <div>
                <label for="a1" class="formbold-form-label"> Answer 1</label>
                <input
                type="text"
                name="a1"
                placeholder=""
                id="a1"
                class="formbold-form-input"
                />
            </div>
          </div>
          <div class="formbold-input-flex">
            <div>
                <label for="q2" class="formbold-form-label"> Question 2</label>
                <input
                type="text"
                name="q2"
                placeholder=""
                id="q2"
                class="formbold-form-input"
                />
            </div>
            <div>
                <label for="a2" class="formbold-form-label"> Answer 2</label>
                <input
                type="text"
                name="a2"
                placeholder=""
                id="a2"
                class="formbold-form-input"
                />
            </div>
          </div>
          <div class="formbold-input-flex">
            <div>
                <label for="q3" class="formbold-form-label"> Question 3</label>
                <input
                type="text"
                name="q3"
                placeholder=""
                id="q3"
                class="formbold-form-input"
                />
            </div>
            <div>
                <label for="a3" class="formbold-form-label"> Answer 3</label>
                <input
                type="text"
                name="a3"
                placeholder=""
                id="a3"
                class="formbold-form-input"
                />
            </div>
          </div>
          <div class="formbold-input-flex">
            <div>
                <label for="q4" class="formbold-form-label"> Question 4</label>
                <input
                type="text"
                name="q4"
                placeholder=""
                id="q4"
                class="formbold-form-input"
                />
            </div>
            <div>
                <label for="a4" class="formbold-form-label"> Answer 4</label>
                <input
                type="text"
                name="a4"
                placeholder=""
                id="a4"
                class="formbold-form-input"
                />
            </div>
          </div>
          <div class="formbold-input-flex">
            <div>
                <label for="q5" class="formbold-form-label"> Question 5</label>
                <input
                type="text"
                name="q5"
                placeholder=""
                id="q5"
                class="formbold-form-input"
                />
            </div>
            <div>
                <label for="a5" class="formbold-form-label"> Answer 5</label>
                <input
                type="text"
                name="a5"
                placeholder=""
                id="a5"
                class="formbold-form-input"
                />
            </div>
          </div>          
        </div>
          
        <div class="formbold-form-step-3">
          <div class="formbold-form-confirm">
            <div>
 
            </div>
          </div>
        </div>

        <div class="formbold-form-btn-wrapper">
          <button class="formbold-back-btn">
            Back
          </button>

          <button class="formbold-btn" >
              Next Step
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1675_1807)">
              <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
              </g>
              <defs>
              <clipPath id="clip0_1675_1807">
              <rect width="16" height="16" fill="white"/>
              </clipPath>
              </defs>
              </svg>
          </button>
        </div>
    </form>
  </div>
</div>


<script>
  const stepMenuOne = document.querySelector('.formbold-step-menu1')
  const stepMenuTwo = document.querySelector('.formbold-step-menu2')
  const stepMenuThree = document.querySelector('.formbold-step-menu3')

  const stepOne = document.querySelector('.formbold-form-step-1')
  const stepTwo = document.querySelector('.formbold-form-step-2')
  const stepThree = document.querySelector('.formbold-form-step-3')

  const formSubmitBtn = document.querySelector('.formbold-btn')
  const formBackBtn = document.querySelector('.formbold-back-btn')

  formSubmitBtn.addEventListener("click", function(event){
    event.preventDefault()
    if(stepMenuOne.className == 'formbold-step-menu1 active') {
        event.preventDefault()

        stepMenuOne.classList.remove('active')
        stepMenuTwo.classList.add('active')

        stepOne.classList.remove('active')
        stepTwo.classList.add('active')

        formBackBtn.classList.add('active')
        formBackBtn.addEventListener("click", function (event) {
          event.preventDefault()

          stepMenuOne.classList.add('active')
          stepMenuTwo.classList.remove('active')

          stepOne.classList.add('active')
          stepTwo.classList.remove('active')

          formBackBtn.classList.remove('active')

        })

      } else if(stepMenuTwo.className == 'formbold-step-menu2 active') {
        event.preventDefault()

        stepMenuTwo.classList.remove('active')
        stepMenuThree.classList.add('active')

        stepTwo.classList.remove('active')
        stepThree.classList.add('active')

        formBackBtn.classList.remove('active')
        document.querySelector('form').submit()

    } 
  })
    
</script>

</body>

</html>
