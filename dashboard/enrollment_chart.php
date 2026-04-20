<?php include "../auth/check_auth.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Enrollment Analytics</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100 p-8">

<div class="max-w-4xl mx-auto">

<!-- Header -->
<h1 class="text-3xl font-bold mb-6">Enrollment Analytics</h1>

<!-- Card -->
<div class="bg-white shadow-lg rounded-lg p-6">

<h2 class="text-xl font-semibold mb-4">
Students per Course
</h2>

<canvas id="chart"></canvas>

</div>

</div>

<script>
fetch('../api/enrollment_stats.php')
.then(res => res.json())
.then(data => {

new Chart(document.getElementById('chart'), {
    type: 'bar',

    data: {
        labels: data.labels,
        datasets: [{
            label: 'Students per Course',
            data: data.values,
            backgroundColor: 'rgba(59, 130, 246, 0.7)'
        }]
    },

    options: {
        responsive: true,
        plugins: {
            legend: { display: false }
        }
    }
});

});
</script>

</body>
</html>