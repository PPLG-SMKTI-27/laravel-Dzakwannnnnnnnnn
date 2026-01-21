window.handleSearch = function (e) {
  const keywords = [
    { key: "beranda", target: "/" },
    { key: "profil", target: "/#profil" },
    { key: "project", target: "/#project" },
    { key: "kontak", target: "/#kontak" },
    { key: "skill", target: "/#skill" },
    { key: "kemampuan", target: "/#skill" },
    { key: "pendidikan", target: "/pendidikan" },
    { key: "galeri", target: "/galeri" },
    { key: "dzakwan", target: "/#profil" },
    { key: "nama", target: "/#profil" },
    { key: "foto", target: "/galeri" },
    { key: "sekolah", target: "/pendidikan" }
  ];

  const input = e.target.value.toLowerCase();
  const resultBox = document.getElementById("searchResult");
  resultBox.innerHTML = "";

  if (!input) {
    resultBox.style.display = "none";
    return;
  }

  const results = keywords.filter(item =>
    item.key.includes(input)
  );

  // ❌ TIDAK ADA HASIL
  if (!results.length && e.key === "Enter") {
    showNotFoundPopup();
    return;
  }

  if (!results.length) {
    resultBox.style.display = "none";
    return;
  }

  // ✅ ENTER → KE HASIL PERTAMA
  if (e.key === "Enter") {
    window.location.href = results[0].target;
    return;
  }

  resultBox.style.display = "block";

  results.forEach(item => {
    const div = document.createElement("div");
    div.textContent = item.key;
    div.onclick = () => window.location.href = item.target;
    resultBox.appendChild(div);
  });
};

// 🔔 POPUP NOT FOUND
function showNotFoundPopup() {
  if (document.getElementById("searchPopup")) return;

  const popup = document.createElement("div");
  popup.id = "searchPopup";
  popup.innerText = "Kata kunci tidak ditemukan";

  popup.style.position = "fixed";
  popup.style.bottom = "60px";
  popup.style.left = "50%";
  popup.style.transform = "translateX(-50%)";
  popup.style.background = "#ff0000";
  popup.style.color = "white";
  popup.style.padding = "12px 22px";
  popup.style.borderRadius = "10px";
  popup.style.fontSize = "14px";
  popup.style.boxShadow = "0 10px 30px rgba(0,0,0,0.3)";
  popup.style.zIndex = "9999";
  popup.style.opacity = "0";
  popup.style.transition = "0.3s";

  document.body.appendChild(popup);

  setTimeout(() => popup.style.opacity = "1", 10);

  setTimeout(() => {
    popup.style.opacity = "0";
    setTimeout(() => popup.remove(), 300);
  }, 2000);
}

let lastScrollTop = 0;
const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  // 🔥 JIKA MENTOK KE ATAS → NAVBAR WAJIB MUNCUL
  if (scrollTop <= 0) {
    navbar.classList.remove("hide");
    lastScrollTop = 0;
    return;
  }

  // SCROLL KE BAWAH → NAVBAR MUNCUL
  if (scrollTop > lastScrollTop) {
    navbar.classList.remove("hide");
  }
  // SCROLL KE ATAS → NAVBAR HILANG
  else {
    navbar.classList.add("hide");
  }

  lastScrollTop = scrollTop;
});
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("loaded");
    }
  });
}, { threshold: 0.2 });

document.querySelectorAll(".animate").forEach(el => observer.observe(el));
