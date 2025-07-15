async function loadPageContent(id, url) {
    const div = document.getElementById(id);
    if (!div.innerHTML.trim()) {
        try {
            const res = await fetch(url);
            const html = await res.text();
            div.innerHTML = html;
        } catch (e) {
            div.innerHTML = `<p>Failed to load ${url}</p>`;
        }
    }
    div.classList.add("page-active");
}

async function switchPage()
{
    const hash = location.hash || "#/";
    document.querySelectorAll('.active-pages').forEach(p => p.classList.remove('page-active'));

    switch (hash)
    {
        case "#/":
            document.getElementById("home").classList.add("page-active");
            break;

        case "#onepage_favorites":
            await loadPageContent("onepage_favorites", "pages/favorites.php");
            break;

        case "#onepage_about":
            await loadPageContent("onepage_about", "pages/about.php");
            break;

        case "#onepage_contact":
            await loadPageContent("onepage_contact", "pages/contact.php");
            break;

        default:
            document.getElementById("home").classList.add("page-active");
            break;
    }
}
window.addEventListener("hashchange", switchPage);
window.addEventListener("load", switchPage);