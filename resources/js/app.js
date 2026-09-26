console.log("hello")
import "./bootstrap";

const searchInput = document.getElementById("note-search");
const noteCards = document.querySelectorAll(".note-card");
const noSearchResults = document.getElementById("no-search-results");

if (searchInput) {
    searchInput.addEventListener("input", function () {
        const searchTerm = this.value.trim().toLowerCase();

        let visibleNotes = 0;

        noteCards.forEach(function (noteCard) {
            const searchableText = noteCard.dataset.search || "";

            if (searchTerm === "" || searchableText.includes(searchTerm)) {
                noteCard.classList.remove("hidden");
                visibleNotes++;
            } else {
                noteCard.classList.add("hidden");
            }
        });

        if (noSearchResults && searchTerm !== "" && visibleNotes === 0) {
            noSearchResults.classList.remove("hidden");
        } else if (noSearchResults) {
            noSearchResults.classList.add("hidden");
        }
    });
}
