// sila id, name, price yung mga value na ipapasa pag click ng buy now button.
function buyNow(id, name, price) {
    document.getElementById("modal").classList.add("active");
    // pag click ng buy now, lalabas yung modal. "active" class yung nag cocontrol kung nakikita or hindi yung modal.
    // so pag click ng buy now, nakalagay yung class na "modal" automatic na siyang hidden, kaya my add class na "active"
    // so add kayo ng .active { display: block; } sa css nyo para mag work.
    document.getElementById("product_id").value = id;
    document.getElementById("product_name").value = name;
    document.getElementById("product_price").value = price;
    // so pag lalabas yung modal then automatic na mapupuno yung mga input sa modal ng name, price, at id ng product na binili.
    document.getElementById("quantity").value = "1";
    document.getElementById("total_price").value = price;
    document.getElementById("img").src = "showImage.php?id=" + id;
    // para mag show din yung image sa modal.
}

function closeModal() {
    document.getElementById("modal").classList.remove("active");
    // pag click ng close button, mawawala yung modal. remove class na "active" para mawala yung display block sa css nyo.
}

function compute() {
    let price = document.getElementById("product_price").value;
    let qty = document.getElementById("quantity").value;
    document.getElementById("total_price").value = price * qty;
    // so pag nag input ng quantity, automatic na mag compute yung total price. price * quantity.
}

// Additional code para pag may stock na 0, magiging disabled yung buy now button. so hindi na pwedeng i click yung buy now button kapag wala ng stock.
document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".col");

    cards.forEach((card) => {
        const stockText = card.querySelector("#stock").innerText;
        const buyBtn = card.querySelector(".buy-now");
        if (stockText.includes("0")) {
            buyBtn.disabled = true;
            buyBtn.style.pointerEvents = "none";
            buyBtn.style.opacity = "0.5";
        }
    });
});
