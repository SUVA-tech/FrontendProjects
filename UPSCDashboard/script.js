document.addEventListener("DOMContentLoaded", function () {
    const notificationList = document.getElementById("notificationList");
    const examTable = document.getElementById("examTable");

    const notifications = ["Notification 1", "Notification 2", "Notification 3"];
    const examSchedule = [
        { exam: "Exam 1", date: "2023-09-15" },
        { exam: "Exam 2", date: "2023-10-10" },
    ];

    notifications.forEach((notification) => {
        const li = document.createElement("li");
        li.innerHTML = `<a href="#">${notification}</a>`;
        notificationList.appendChild(li);
    });

    examSchedule.forEach((exam) => {
        const row = examTable.insertRow();
        const cell1 = row.insertCell(0);
        const cell2 = row.insertCell(1);
        cell1.textContent = exam.exam;
        cell2.textContent = exam.date;
    });
});
