<!--POPUP-->
<link rel="stylesheet" href="/css/popup.css">

<div class="dialogBackdrop"></div>
<div class="dialog">
<span></span>
    <div>
        <h2>Don't leave yet!</h2>
        <p>Apply your coupon <b>RH15</b> at checkout for <b>15% off</b></p>
        <button class="button primaryBlue">Close</button>
    </div>
</div>

<script lang="js">
    const dialogLeave = document.querySelector(".dialogBackdrop");
    const dialog = document.querySelector(".dialog");
    const dialogButton = document.querySelector(".dialog button");
    let showCheck = false;
    document.addEventListener("mouseout", function (event) {
        if (event.clientY <= 0 || event.clientX <= 0 || (event.clientX >= window.innerWidth || event.clientY >= window.innerHeight)) {
            if (!showCheck) {
                dialogLeave.classList.add("show");
                dialog.classList.add("show");
            }
            showCheck = true;
        }
    });
    dialogLeave.addEventListener("click", () => {
        dialogLeave.classList.remove("show");
        dialog.classList.remove("show");
    });
    dialogButton.addEventListener("click", () => {
        dialogLeave.classList.remove("show");
        dialog.classList.remove("show");
    });
</script>