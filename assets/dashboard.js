/*
fetch('../api/enrollment_stats.php')
.then(res=>res.json())
.then(data=>{
new Chart(document.getElementById('enrollChart'),{
type:'bar',
data:{
labels:data.labels,
datasets:[{
label:'Students per Course',
data:data.values
}]
}
});
});
*/
fetch('../api/enrollment_stats.php')
.then(res => res.json())
.then(data => {
    new Chart(
        document.getElementById('enrollChart'),
        {
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
                plugins: { legend: { display: false } }
            }
        }
    );
});