// Add this script to the end of your layout

var accordions = document.querySelectorAll(".accordion-trigger");

accordions.forEach( (accordion ) => {

    // If any have at load time the active class we open it
    if(accordion.classList.contains( "active" ))
    {
        var panel = accordion.nextElementSibling;
        panel.style.maxHeight = panel.scrollHeight + "px";
    }

    accordion.addEventListener("click", function() {

        this.classList.toggle("active" );

        this.parentElement.classList.toggle( "active" );

        var panel = this.nextElementSibling;

        if (panel.style.maxHeight) {
            // Close it
            panel.style.maxHeight = null;
        } else {
            // Open it
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
});
