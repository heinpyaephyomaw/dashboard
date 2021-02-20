let toggle_icon = document.querySelector(".toggle-icon");
let from = document.querySelector(".from");
let to = document.querySelector(".to");
let onoff = document.getElementById("onoff");
let from_date = document.querySelector(".from_date");
let to_date = document.querySelector(".to_date");


function toggleChange() {
    toggle_icon.classList.toggle("feather-toggle-left");
    toggle_icon.classList.toggle("feather-toggle-right");
    // from.classList.toggle("show_date");
    // to.classList.toggle("show_date");
    let onoff_value = onoff.value;
    onoff.value = null;
    onoff.value = onoff_value == 0 ? 1 : 0;

    let hasClass = toggle_icon.classList.contains("feather-toggle-right");


    if (hasClass) {
        $('#from-date').append(`
        <div class="form-group from d-block row">
        <label for="address" class="col-sm-5 col-form-label">From</label>
         <div class="col-sm-7">
             <input type="date" class="form-control w-50">
         </div>
         </div>
        `);

        $('#to-date').append(`
         <div class="form-group to d-block row">
         <label for="address" class="col-sm-5 col-form-label">To</label>
          <div class="col-sm-7">
              <input type="date" class="form-control w-50">
           </div>
           </div>
         `);

    } else {
        $('#from-date').empty(`
        <div class="form-group from d-block row">
        <label for="address" class="col-sm-5 col-form-label">From</label>
         <div class="col-sm-7">
             <input type="date" class="form-control w-50">
         </div>
         </div>
        `);

        $('#to-date').empty(`
        <div class="form-group to d-block row">
        <label for="address" class="col-sm-5 col-form-label">To</label>
         <div class="col-sm-7">
             <input type="date" class="form-control w-50">
          </div>
          </div>
        `);

    }



}







let upload_image = document.querySelector(".upload-image");
let banner_img_upload = document.querySelector(".banner-image-upload");

function upload_banner_image() {
    banner_img_upload.click();
    banner_img_upload.addEventListener("change", function() {
        let files = banner_img_upload.files[0];
        const reader = new FileReader();
        reader.addEventListener("load", function() {
            let value = reader.result;
            upload_image.src = value;
        });
        reader.readAsDataURL(files);

    });
}