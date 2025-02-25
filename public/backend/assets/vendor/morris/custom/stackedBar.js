// Stacked Bar Chart
Morris.Bar({
	element: "stackedBar",
	data: [
		{ x: "2023 Q1", y: 3, z: 2, a: 3 },
		{ x: "2023 Q2", y: 2, z: null, a: 1 },
		{ x: "2023 Q3", y: 0, z: 2, a: 1 },
		{ x: "2023 Q4", y: 2, z: 3, a: 3 },
		{ x: "2022 Q1", y: 3, z: 2, a: 3 },
		{ x: "2022 Q2", y: 2, z: null, a: 1 },
		{ x: "2022 Q3", y: 0, z: 2, a: 4 },
		{ x: "2022 Q4", y: 2, z: 3, a: 3 },
	],
	xkey: "x",
	ykeys: ["y", "z", "a"],
	labels: ["Y", "Z", "A"],
	stacked: true,
	hideHover: "auto",
	resize: true,
	gridLineColor: "#cccccc",
	barColors: ["#a7144c", "#ba1654", "#c12d65", "#c84576", "#cf5c87", "#d67398"],
});
