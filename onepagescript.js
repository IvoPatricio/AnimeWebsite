async function router()
{
    const hash = location.hash || "#/";
    document.querySelectorAll('.active-pages').forEach(p => p.classList.remove('page-active'));

    switch (hash) {
    case "#/":
        document.getElementById("home").classList.add("page-active");
        break;
    case "#onepage_favorites":
        const favoriteDiv = document.getElementById("onepage_favorites");
        if (!favoriteDiv.innerHTML.trim()) {
        try {
            const res = await fetch("pages/favorites.php");
            const html = await res.text();
            favoriteDiv.innerHTML = html;
        } catch (e) {
            favoriteDiv.innerHTML = "<p>Failed to load about.php</p>";
        }
        }
        favoriteDiv.classList.add("page-active");
        break;
    case "#onepage_about":
        const aboutDiv = document.getElementById("onepage_about");
        if (!aboutDiv.innerHTML.trim()) {
        try {
            const res = await fetch("pages/about.php");
            const html = await res.text();
            aboutDiv.innerHTML = html;
        } catch (e) {
            aboutDiv.innerHTML = "<p>Failed to load about.php</p>";
        }
        }
        aboutDiv.classList.add("page-active");
        break;
    case "#onepage_contact":
        const contactDiv = document.getElementById("onepage_contact");
        if (!contactDiv.innerHTML.trim()) {
        try {
            const res = await fetch("pages/contact.php");
            const html = await res.text();
            contactDiv.innerHTML = html;
        } catch (e) {
            contactDiv.innerHTML = "<p>Failed to load contact.php</p>";
        }
        }
        contactDiv.classList.add("page-active");
        break;
    default:
        document.getElementById("home").classList.add("page-active");
    }
}
window.addEventListener("hashchange", router);
window.addEventListener("load", router);