// function slideToggle(t,e,o){0===t.clientHeight?j(t,e,o,!0):j(t,e,o)}function slideUp(t,e,o){j(t,e,o)}function slideDown(t,e,o){j(t,e,o,!0)}function j(t,e,o,i){void 0===e&&(e=400),void 0===i&&(i=!1),t.style.overflow="hidden",i&&(t.style.display="block");var p,l=window.getComputedStyle(t),n=parseFloat(l.getPropertyValue("height")),a=parseFloat(l.getPropertyValue("padding-top")),s=parseFloat(l.getPropertyValue("padding-bottom")),r=parseFloat(l.getPropertyValue("margin-top")),d=parseFloat(l.getPropertyValue("margin-bottom")),g=n/e,y=a/e,m=s/e,u=r/e,h=d/e;window.requestAnimationFrame(function l(x){void 0===p&&(p=x);var f=x-p;i?(t.style.height=g*f+"px",t.style.paddingTop=y*f+"px",t.style.paddingBottom=m*f+"px",t.style.marginTop=u*f+"px",t.style.marginBottom=h*f+"px"):(t.style.height=n-g*f+"px",t.style.paddingTop=a-y*f+"px",t.style.paddingBottom=s-m*f+"px",t.style.marginTop=r-u*f+"px",t.style.marginBottom=d-h*f+"px"),f>=e?(t.style.height="",t.style.paddingTop="",t.style.paddingBottom="",t.style.marginTop="",t.style.marginBottom="",t.style.overflow="",i||(t.style.display="none"),"function"==typeof o&&o()):window.requestAnimationFrame(l)})}

// let sidebarItems = document.querySelectorAll('.sidebar-item.has-sub');
// for(var i = 0; i < sidebarItems.length; i++) {
//     let sidebarItem = sidebarItems[i];
// 	sidebarItems[i].querySelector('.sidebar-link').addEventListener('click', function(e) {
//         e.preventDefault();

//         let submenu = sidebarItem.querySelector('.submenu');
//         if( submenu.classList.contains('active') ) submenu.style.display = "block"

//         if( submenu.style.display == "none" ) submenu.classList.add('active')
//         else submenu.classList.remove('active')
//         slideToggle(submenu, 300)
//     })
// }

// window.addEventListener('DOMContentLoaded', (event) => {
//     var w = window.innerWidth;
//     if(w < 1200) {
//         document.getElementById('sidebar').classList.remove('active');
//     }
// });
// window.addEventListener('resize', (event) => {
//     var w = window.innerWidth;
//     if(w < 1200) {
//         document.getElementById('sidebar').classList.remove('active');
//     }else{
//         document.getElementById('sidebar').classList.add('active');
//     }
// });

// document.querySelector('.burger-btn').addEventListener('click', () => {
//     document.getElementById('sidebar').classList.toggle('active');
// })
// document.querySelector('.sidebar-hide').addEventListener('click', () => {
//     document.getElementById('sidebar').classList.toggle('active');

// })

// // Perfect Scrollbar Init
// if(typeof PerfectScrollbar == 'function') {
//     const container = document.querySelector(".sidebar-wrapper");
//     const ps = new PerfectScrollbar(container, {
//         wheelPropagation: false
//     });
// }

// // Scroll into active sidebar
// document.querySelector('.sidebar-item.active').scrollIntoView(false)

// Fungsi untuk slide toggle
function slideToggle(t, e, o) {
    0 === t.clientHeight
        ? toggleElement(t, e, o, true)
        : toggleElement(t, e, o);
}

function toggleElement(t, e, o, show = false) {
    t.style.overflow = "hidden";
    if (show) t.style.display = "block";

    let computedStyle = window.getComputedStyle(t),
        height = parseFloat(computedStyle.getPropertyValue("height")),
        paddingTop = parseFloat(computedStyle.getPropertyValue("padding-top")),
        paddingBottom = parseFloat(
            computedStyle.getPropertyValue("padding-bottom")
        ),
        duration = e || 400;

    let heightStep = height / duration,
        paddingTopStep = paddingTop / duration,
        paddingBottomStep = paddingBottom / duration;

    window.requestAnimationFrame(function step(timestamp) {
        if (!t._startTime) t._startTime = timestamp;

        let elapsed = timestamp - t._startTime;
        if (show) {
            t.style.height = heightStep * elapsed + "px";
            t.style.paddingTop = paddingTopStep * elapsed + "px";
            t.style.paddingBottom = paddingBottomStep * elapsed + "px";
        } else {
            t.style.height = height - heightStep * elapsed + "px";
            t.style.paddingTop = paddingTop - paddingTopStep * elapsed + "px";
            t.style.paddingBottom =
                paddingBottom - paddingBottomStep * elapsed + "px";
        }

        if (elapsed < duration) {
            window.requestAnimationFrame(step);
        } else {
            t.style.height = "";
            t.style.paddingTop = "";
            t.style.paddingBottom = "";
            t.style.overflow = "";
            if (!show) t.style.display = "none";
            if (typeof o === "function") o();
        }
    });
}

// Sidebar menu toggle
document.addEventListener("DOMContentLoaded", () => {
    const sidebarItems = document.querySelectorAll(".sidebar-item.has-sub");
    sidebarItems.forEach((item) => {
        const link = item.querySelector(".sidebar-link");
        const submenu = item.querySelector(".submenu");

        link.addEventListener("click", (e) => {
            e.preventDefault();
            submenu.classList.toggle("active");
            slideToggle(submenu, 300);
        });
    });

    // Perfect Scrollbar Init
    if (typeof PerfectScrollbar === "function") {
        const container = document.querySelector(".sidebar-wrapper");
        new PerfectScrollbar(container, { wheelPropagation: false });
    }

    // Scroll active item into view
    const activeItem = document.querySelector(".sidebar-item.active");
    if (activeItem) {
        activeItem.scrollIntoView(false);
    }
});

// Burger button
document.querySelector(".burger-btn").addEventListener("click", () => {
    document.getElementById("sidebar").classList.toggle("active");
});

// Hide sidebar
document.querySelector(".sidebar-hide").addEventListener("click", () => {
    document.getElementById("sidebar").classList.toggle("active");
});

// Window resize handling
window.addEventListener("resize", () => {
    const w = window.innerWidth;
    if (w < 1200) {
        document.getElementById("sidebar").classList.remove("active");
    } else {
        document.getElementById("sidebar").classList.add("active");
    }
});

if (window.innerWidth >= 1200) {
    sidebar.classList.add("active");
} else {
    sidebar.classList.remove("active");
}
