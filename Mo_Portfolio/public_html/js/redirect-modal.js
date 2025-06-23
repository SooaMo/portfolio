window.addEventListener("load", () => {
    const modal = document.getElementById("legacyRedirectModal");
    const closeBtn = document.getElementById("closeLegacyModal");
    const fixedCta = document.getElementById("fixedCta");
  
    // Show the modal when the page loads
    modal.style.display = "flex";
  
    // Close the modal when the close button is clicked
    closeBtn.addEventListener("click", () => {
      modal.style.display = "none";
    });
  
    // Always show the fixed CTA button
    fixedCta.style.display = "block";
  });
  