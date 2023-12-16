const activePage = window.location.pathname;
console.log(activePage); 
const navLinks = document.querySelectorAll('nav a li').forEach(link => {
    if(link.href.includes(`${activePage}`)) {
        link.classList.remove("block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0");
        link.classList.add("block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0");
    }
})
