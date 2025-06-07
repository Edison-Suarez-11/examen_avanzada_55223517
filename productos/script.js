const productList = document.getElementById("product-list");
const searchInput = document.getElementById("search");
let allProducts = [];

async function fetchProducts() {
  try {
    const res = await fetch("https://fakestoreapi.com/products");
    const data = await res.json();
    allProducts = data;
    displayProducts(data);
  } catch (error) {
    console.error("Error al obtener productos:", error);
  }
}

function displayProducts(products) {
  productList.innerHTML = "";
  products.forEach(product => {
    const productCard = document.createElement("div");
    productCard.className = "product-card";

    productCard.innerHTML = `
      <img src="${product.image}" alt="${product.title}">
      <h3>${product.title}</h3>
      <p><strong>Categoría:</strong> ${product.category}</p>
      <p><strong>Precio:</strong> $${product.price}</p>
    `;
    productList.appendChild(productCard);
  });
}

searchInput.addEventListener("input", () => {
  const query = searchInput.value.toLowerCase().trim();
  const filtered = allProducts.filter(p =>
    p.category.toLowerCase().includes(query)
  );
  displayProducts(filtered);
});

fetchProducts();
