async function router()
{
    const hash = location.hash || "#/";
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));

    switch (hash) {
    case "#/":
        document.getElementById("home").classList.add("active");
        break;
    case "#onepage_about":
        const aboutDiv = document.getElementById("onepage_about");
        if (!aboutDiv.innerHTML.trim()) {
        try {
            const res = await fetch("about.php");
            const html = await res.text();
            aboutDiv.innerHTML = html;
        } catch (e) {
            aboutDiv.innerHTML = "<p>Failed to load about.php</p>";
        }
        }
        aboutDiv.classList.add("active");
        break;
    case "#/contact":
        const contactDiv = document.getElementById("contact");
        if (!contactDiv.innerHTML.trim()) {
        try {
            const res = await fetch("contact.php");
            const html = await res.text();
            contactDiv.innerHTML = html;
        } catch (e) {
            contactDiv.innerHTML = "<p>Failed to load contact.php</p>";
        }
        }
        contactDiv.classList.add("active");
        break;
    default:
        document.getElementById("home").classList.add("active");
    }
}
window.addEventListener("hashchange", router);
window.addEventListener("load", router);