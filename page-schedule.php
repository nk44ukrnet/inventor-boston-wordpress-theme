<?php /* Template Name: schedule */
get_header(); ?>

    <style>

        /*    SCHEDULE RELATED: BELOW*/
        #htmlTableSchedule {
            max-width: 900px;
            margin: 0 auto;
            overflow: hidden;
        }

        #htmlTableSchedule .tab_head {
            border-bottom: 1px solid black;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        #htmlTableSchedule .tab_head .tabs_item1 {
            border: 1px solid black;
            transform: translateY(1px);
            width: fit-content;
            padding: 10px;
            cursor: pointer;
        }

        #htmlTableSchedule .tab_head .tabs_item1.tabs_item_active {
            border-bottom: 1px solid white;
            background-color: rgba(0, 0, 255, 0.05);
        }

        #htmlTableSchedule .schedule_tables {
            overflow: auto;
        }

        #htmlTableSchedule .schedule_tables .table {
            display: none;
            width: 900px;
            overflow: auto;
            flex-wrap: wrap;
            justify-content: space-between;
            text-align: center;
        }

        #htmlTableSchedule .schedule_tables .table .table_item {
            width: calc(100% / 7);
            border: 1px solid;
            padding: 5px;
            box-sizing: border-box;
        }

        #htmlTableSchedule .schedule_tables .table .table_item_long {
            width: 100%;
            padding: 15px 5px;
        }

        #htmlTableSchedule .schedule_tables .table.table_active {
            display: flex;
        }

        @media (max-width: 900px) {
            #htmlTableSchedule .tab_head {
                flex-direction: column;
            }

            #htmlTableSchedule .tab_head .tabs_item1 {
                width: 100%;
                border-bottom: 1px solid black;
                box-sizing: border-box;
            }
        }
    </style>

    <main class="main side-elements">
        <div class="inner_wrapper">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <h1><?php echo get_the_title(); ?></h1>

                    <div>
                        <?php the_content(); ?>
                    </div>

                    <div id="htmlTableSchedule">
                        <div id="htmlTableScheduleLoading">Loading...</div>
                        <div class="tab_head" id="tab_head"></div>
                        <div class="schedule_tables" id="schedule_tables"></div>
                    </div>
                    <script src="<?php echo get_template_directory_uri(); ?>/script/xlsx.full.min.js"></script>
                    <script>
                        const input_file = "<?php the_field('schedule'); ?>";
                        let done;

                        let oReq = new XMLHttpRequest();
                        oReq.open("GET", input_file, true);
                        oReq.responseType = "arraybuffer";
                        var X = XLSX;

                        oReq.onload = function (e) {
                            let arraybuffer = oReq.response;
                            /*             not responseText!!              */

                            /* convert data to binary string */
                            let data = new Uint8Array(arraybuffer);

                            let arr = new Array();
                            for (let i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
                            let bstr = arr.join("");
                            /* Call XLSX */
                            let workbook = XLSX.read(bstr, {type: "binary"});
                            /* DO SOMETHING WITH workbook HERE */
                            let firstSheet = workbook.SheetNames[0];
                            done = JSON.stringify(workbook);
                            let parsed = XLSX.utils.sheet_to_csv(firstSheet);

                            /* DO SOMETHING WITH workbook HERE */
                            var to_json = function to_json(workbook) {
                                var result = {};
                                workbook.SheetNames.forEach(function (sheetName) {
                                    var roa = X.utils.sheet_to_json(workbook.Sheets[sheetName], {header: 1});
                                    if (roa.length) result[sheetName] = roa;
                                });
                                return JSON.stringify(result, 2, 2);
                            };
                            workbook = to_json(workbook);
                            let wb = JSON.parse(workbook);
                            workbook = wb;
                            buildHTMLTable(workbook);
                            (function () {
                                //handle htmlTableSchedule actions
                                let htmlTableContainer = document.querySelector('#htmlTableSchedule'),
                                    tabHead = htmlTableContainer.querySelector('#tab_head'),
                                    scheduleTablesCont = htmlTableContainer.querySelector('#schedule_tables'),
                                    allTabHeads = document.querySelectorAll('.tabs_item1'),
                                    allTables = document.querySelectorAll('.table');
                                //initial setup
                                allTabHeads[0].classList.add('tabs_item_active');
                                allTables[0].classList.add('table_active');

                                function schedulesReset() {
                                    allTabHeads.forEach(item => {
                                        item.classList.remove('tabs_item_active');
                                    });
                                    allTables.forEach(item => {
                                        item.classList.remove('table_active');
                                    });
                                }

                                allTabHeads.forEach((item, idx) => {
                                    item.addEventListener('click', function () {
                                        schedulesReset();
                                        allTabHeads[idx].classList.add('tabs_item_active');
                                        allTables[idx].classList.add('table_active');
                                    });
                                });
                            })();
                        };

                        oReq.send();

                        function buildHTMLTable(arr) {
                            try {
                                let tableLoading = document.getElementById('htmlTableScheduleLoading');
                                tableLoading.remove();
                            } catch (e) {
                                console.log(e);
                            }
                            let myResLS = arr,
                                //this IDS below are required!
                                htmlTableSchedule = document.querySelector('#htmlTableSchedule'),
                                tabHead = htmlTableSchedule.querySelector('#tab_head'),
                                tabSchedules = htmlTableSchedule.querySelector('#schedule_tables');

                            let scheduleTabNamesArr = Object.keys(myResLS),
                                scheduleTabValuesArr = Object.values(myResLS);

                            //build tabs names and create table templates
                            scheduleTabNamesArr.forEach(tabName => {
                                tabHead.innerHTML += `
            <div class="tabs_item1">${tabName}</div>
            `;
                                tabSchedules.innerHTML += `
            <div class="table"></div>
            `;
                            })
                            //build tabs schedule for each
                            let tabScheduleSelection = tabSchedules.querySelectorAll('.table');
                            scheduleTabValuesArr.forEach((arrLevel1, idx) => {
                                arrLevel1.forEach(arrLevel2 => {
                                    if (arrLevel2.length == 1) {
                                        tabScheduleSelection[idx].innerHTML += `<div class="table_item table_item_long">${arrLevel2}</div>`;
                                    } else {
                                        arrLevel2.forEach(arrLevel3 => {
                                            tabScheduleSelection[idx].innerHTML += `<div class="table_item">${arrLevel3}</div>`;
                                        });
                                        //tabScheduleSelection[idx].innerHTML += `<div class="table_item">${arrLevel2}</div>`;
                                    }
                                })
                            })
                            //clear 'empty' table data
                            let tableItem = htmlTableSchedule.querySelectorAll('.table_item');

                            for (let tableItemDetails of tableItem) {
                                if (tableItemDetails.innerText == 'empty') {
                                    tableItemDetails.innerHTML = ``;
                                }
                                if (tableItemDetails.innerText.trim().toLowerCase() != 'Monday'.toLowerCase()
                                    && tableItemDetails.innerText.trim().toLowerCase() != 'Tuesday'.toLowerCase()
                                    && tableItemDetails.innerText.trim().toLowerCase() != 'Wednesday'.toLowerCase()
                                    && tableItemDetails.innerText.trim().toLowerCase() != 'Thursday'.toLowerCase()
                                    && tableItemDetails.innerText.trim().toLowerCase() != 'Friday'.toLowerCase()
                                    && tableItemDetails.innerText.trim().toLowerCase() != 'Saturday'.toLowerCase()
                                    && tableItemDetails.innerText.trim().toLowerCase() != 'Sunday'.toLowerCase() && tableItemDetails.innerText.trim() != ''
                                    && !tableItemDetails.classList.contains('table_item_long')
                                ) {
                                    tableItemDetails.style.backgroundColor = '#FEE74C';
                                }
                            }
                        }
                    </script>

                <?php
                endwhile;
            endif;
            ?>
        </div>
    </main>

<?php get_footer(); ?>