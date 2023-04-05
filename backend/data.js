const enseignants = [
  { id: 1, name: "Bisimwa Jean-Pierre", cours: "Francais" },
  { id: 2, name: "Bisimwa Jean-Pierre", cours: "Francais" },
  { id: 3, name: "Bisimwa Jean-Pierre", cours: "Francais" },
  { id: 4, name: "Bisimwa Jean-Pierre", cours: "Francais" },
];

enseignants.map((item) =>
  document.getElementById("results")
).innerHTML = `<p>${item.cours}</p>`;
