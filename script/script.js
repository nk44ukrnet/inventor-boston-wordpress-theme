window.addEventListener('DOMContentLoaded', function () {
    //navigation +========================================+
    /*    let mobileWidth = 768,
            ulNavLiMain = document.querySelectorAll('.ul_nav_li_main'),
            ulNavDrops = document.querySelectorAll('.ul_nav_drops');

        $('.nav_mobile').click(function () {
           $('.ul_nav').toggleClass('mob_active');

        });

      $('.ul_nav_li_main:eq(0)').click(function (e) {
         if(window.innerWidth <= mobileWidth) {
             console.log('clicked');
             $('.ul_nav_drops:eq(0)').toggleClass('mob_active');
             $('.ul_nav_drops_li').click(function (e) {
                 e.stopPropagation();
             });
         }
      });
        $('.ul_nav_li_main:eq(1)').click(function (e) {
            if(window.innerWidth <= mobileWidth) {
                console.log('clicked');
                $('.ul_nav_drops:eq(1)').toggleClass('mob_active');
                $('.ul_nav_drops_li').click(function (e) {
                    e.stopPropagation();
                });
            }
        });
        $('.ul_nav_li_main:eq(3)').click(function (e) {
            if(window.innerWidth <= mobileWidth) {
                console.log('clicked');
                $('.ul_nav_drops:eq(2)').toggleClass('mob_active');
                $('.ul_nav_drops_li').click(function (e) {
                    e.stopPropagation();
                });
            }
        });
*/
    // $('.adress_list').change(function () {
    //     if($('.adress_list').val() === 'Other') {
    //         $('.other_city').toggleClass('input_active');
    //         document.querySelector('.other_city').required = true;
    //     } else {
    //         $('.other_city').removeClass('input_active');
    //         document.querySelector('.other_city').required = false;
    //     }
    // });
//nav V2 +======================================+
    /*   window.addEventListener('resize', function () {
           if(window.innerWidth <= 840) {
               const btnNav = document.querySelector('.nav_v2_btn'),
                   navItself = document.querySelector('.nav_v2_ul'),
                   navV2Li = document.querySelectorAll('.nav_v2_li'),
                   dropDownV2 = document.querySelectorAll('.dropdown_v2_ul');
               btnNav.addEventListener('click', function () {
                   navItself.classList.toggle('nav_v2_on');
                   const liDrop = document.querySelectorAll('.nav_v2_li_drop'),
                       liDropChild = document.querySelectorAll('.nav_v2_li_drop .dropdown_v2_ul');
                   for(let i = 0; i < liDrop.length; i++) {
                       liDrop[i].addEventListener('click', function () {
                           liDropChild[i].classList.toggle('nav_v2_on');
                       });
                   }
               });
           }
       });
       if(window.innerWidth <= 840) {
           const btnNav = document.querySelector('.nav_v2_btn'),
               navItself = document.querySelector('.nav_v2_ul'),
               navV2Li = document.querySelectorAll('.nav_v2_li'),
               dropDownV2 = document.querySelectorAll('.dropdown_v2_ul');
           btnNav.addEventListener('click', function () {
               navItself.classList.toggle('nav_v2_on');
               const liDrop = document.querySelectorAll('.nav_v2_li_drop'),
                   liDropChild = document.querySelectorAll('.nav_v2_li_drop .dropdown_v2_ul');
               for(let i = 0; i < liDrop.length; i++) {
                   liDrop[i].addEventListener('click', function () {
                       liDropChild[i].classList.toggle('nav_v2_on');
                   });
               }
           });
       }*/
    try {
        const btnNav = document.querySelector('.nav_v2_btn'),
            navItself = document.querySelector('.nav_v2_ul'),
            navV2Li = document.querySelectorAll('.nav_v2_ul > li'),
            dropDownV2 = document.querySelectorAll('.sub-menu');

        //add arrow down if (navV2Li has 2 children)
        for(let v2Li of navV2Li) {
            if(v2Li.children.length === 2) {
                v2Li.children[0].insertAdjacentHTML('beforeend', ' <i class="fas fa-caret-down"></i>');
            }
        }

        btnNav.addEventListener('click', function (e) {
            navItself.classList.toggle('nav_v2_on');
        });
        navV2Li.forEach((item, idx)=> {
            item.addEventListener('click', function (e) {
                //expecting 2
                if(item.children.length > 1) {
                    let elDropdown = item.querySelector('.sub-menu');
                    elDropdown.classList.toggle('nav_v2_on');
                }
            });
        })
    } catch (e){
        console.log(e);
    }
    try {
        // little gallery MAIN PAGE +========================================+
        let minImg = document.querySelectorAll('.little_img_thumb'),
            modalImg = document.querySelector('.modal_img');
        for(let i = 0; i < minImg.length; i++) {
            minImg[i].addEventListener('click', function (e) {
                let getSrc = e.target.getAttribute('src');
                modalImg.setAttribute('src', getSrc);
            })
        }
    } catch (e) {
        console.log(e);
    }

    try {
        //send_form sing up  +========================================+
        const scriptURL = 'https://inventorstemschool.com/data/singup.php';
        const form = document.querySelector('.singup_form');

        form.addEventListener('submit', e => {
            e.preventDefault();
            function successSingupSubmit() {
                let allFormsSelect = document.querySelectorAll('form'),
                    paragprahStatus = document.querySelector('#singUpResult');
                allFormsSelect.forEach(function (tq) {
                    tq.reset();
                });
                paragprahStatus.style.display = 'block';
                paragprahStatus.textContent = '';
                paragprahStatus.style.color = 'green';
                paragprahStatus.textContent = 'Your data has been successfully submitted!';
                setTimeout(function () {
                    paragprahStatus.style.display = 'none';
                    paragprahStatus.textContent = '';
                }, 5000);
            }
            function errorSubmit() {
                let paragprahStatus = document.querySelector('#singUpResult');
                paragprahStatus.style.display = 'block';
                paragprahStatus.textContent = '';
                paragprahStatus.style.color = 'red';
                paragprahStatus.textContent = 'Something went wrong. Please try again later!';
            }
            let checkboxesInThisField = document.querySelectorAll('.input_range_trial[type=checkbox]:checked').length;
            let currentErrorFiled = document.querySelector('#age_checkbox_error');
            if(!checkboxesInThisField) {
                currentErrorFiled.innerHTML = '[Select at least 1 checkbox]';
                currentErrorFiled.classList.add('animationBlick');
            } else {
                currentErrorFiled.classList.remove('animationBlick');
                currentErrorFiled.innerHTML = '';
                fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                    .then(response => (successSingupSubmit())//console.log('Success!', response))
                        .catch(error => errorSubmit()));
            }
        });
    } catch (e) {
        console.log(e);
    }

    try {
        //tabs Schedule +========================================+
        let tabsHead = document.querySelectorAll('.tabs_item'),
            tabsContent = document.querySelectorAll('.tabs_content');

        for(let i = 0; i < tabsHead.length; i++) {
            tabsHead[i].addEventListener('click', function (e) {
                (function () {
                    for(let q = 0; q < tabsContent.length; q++) {
                        tabsContent[q].classList.remove('tabs_content_active');
                        tabsContent[q].setAttribute('class', 'tabs_content');
                    }
                }());

                for (let i = 0; i < tabsHead.length; i++) {
                    tabsHead[i].classList.remove('tabs_item_active');
                }
                tabsHead[i].classList.toggle('tabs_item_active');
                tabsContent[i].classList.toggle('tabs_content_active');
            });
        }

//  td bgColor @yellowColor if !empty [tab0]
        let tdHolder = document.querySelectorAll('.jun_item_schedule td');
        for(let i = 0; i < tdHolder.length; i++) {
            if(tdHolder[i].textContent !== '') {
                tdHolder[i].style.backgroundColor = '#fee74c';
            }
        }
        // td bgColor @blueColor if !empty [tab1]
        let tdHolder1 = document.querySelectorAll('.jun_item_schedule1 td');
        for(let i = 0; i < tdHolder1.length; i++) {
            if(tdHolder1[i].textContent !== '') {
                tdHolder1[i].style.backgroundColor = '#006fb9';
                tdHolder1[i].style.color = '#ffffff';
            }
        }
        // td bgColor @greenColor if !empty [tab2]
        let tdHolder2 = document.querySelectorAll('.jun_item_schedule2 td');
        for(let i = 0; i < tdHolder2.length; i++) {
            if(tdHolder2[i].textContent !== '') {
                tdHolder2[i].style.backgroundColor = '#32a858';
                tdHolder2[i].style.color = '#ffffff';
            }
        }

        //tabs inner (choose subject). Now :hover @greenColor
        let innerTabSubject = document.querySelectorAll('.jun_item'),
            junItemSchedule = document.querySelectorAll('.jun_item_schedule'),
            innerTabSubject1 = document.querySelectorAll('.jun_item1'),
            junItemSchedule1 = document.querySelectorAll('.jun_item_schedule1'),
            innerTabSubject2 = document.querySelectorAll('.jun_item2'),
            junItemSchedule2 = document.querySelectorAll('.jun_item_schedule2');

        for(let i = 0; i < innerTabSubject.length; i++) {
            innerTabSubject[i].addEventListener('click', function (e) {
                innerTabSubject.forEach(function (t) {
                    t.classList.remove('jun_item_active');
                });
                e.target.classList.toggle('jun_item_active');
                junItemSchedule.forEach(function (q) {
                    q.classList.remove('jun_item_schedule_active');
                });
                junItemSchedule[i].classList.toggle('jun_item_schedule_active');
            });
        }
        //tab item[1]
        for(let i = 0; i < innerTabSubject1.length; i++) {
            innerTabSubject1[i].addEventListener('click', function (e) {
                innerTabSubject1.forEach(function (t) {
                    t.classList.remove('jun_item_active');
                });
                e.target.classList.toggle('jun_item_active');
                junItemSchedule1.forEach(function (q) {
                    q.classList.remove('jun_item_schedule_active');
                });
                junItemSchedule1[i].classList.toggle('jun_item_schedule_active');
            });
        }
        //tab item[2]
        for(let i = 0; i < innerTabSubject2.length; i++) {
            innerTabSubject2[i].addEventListener('click', function (e) {
                innerTabSubject2.forEach(function (t) {
                    t.classList.remove('jun_item_active');
                });
                e.target.classList.toggle('jun_item_active');
                junItemSchedule2.forEach(function (q) {
                    q.classList.remove('jun_item_schedule_active');
                });
                junItemSchedule2[i].classList.toggle('jun_item_schedule_active');
            });
        }

    } catch (e) {
        console.log(e);
    }

    try {


//plain text slider
        let plainTextCounter = 0;
        const plainTextItem = document.querySelectorAll('.testimonials_plain_item'),
            textPlain1 = document.querySelectorAll('.test_plain1'),
            textPlain2 = document.querySelectorAll('.test_plain2'),
            textPlain3 = document.querySelectorAll('.test_plain3'),
            arrowLeftPlain = document.querySelector('.arr_left_nav_plain'),
            arrowRightPlain = document.querySelector('.arr_right_nav_plain');
        function hidePlainText() {
            for(let i = 0; i < plainTextItem.length; i++) {
                plainTextItem[i].classList.remove('test_plain_active');
            }
        }
        function plainTextChangeClass(num) {
            hidePlainText();
            for(let q = 0; q < num.length; q++) {
                num[q].classList.add('test_plain_active');
            }
        }
        function plainTextSwitch() {
            switch (plainTextCounter) {
                case 0:
                    plainTextChangeClass(textPlain1);
                    break;
                case 1:
                    plainTextChangeClass(textPlain2);
                    break;
                case 2:
                    plainTextChangeClass(textPlain3);
                    break;
                default:
                    console.log('Plain text error');
            }
        }

        arrowLeftPlain.addEventListener('click', function () {
            plainTextCounter--;
            if(plainTextCounter < 0) {
                plainTextCounter = 2;
            }
            plainTextSwitch();
        });
        arrowRightPlain.addEventListener('click', function () {
            plainTextCounter++;
            if(plainTextCounter > 2) {
                plainTextCounter = 0;
            }
            plainTextSwitch();
        });
    } catch (e) {
        console.log(e);
    }
})

