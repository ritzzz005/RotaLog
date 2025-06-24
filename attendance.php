<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotaract Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Reset */
        body, h1, h2, p, ul {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Roboto', sans-serif;
            background: #0d0d0d; /* Deep dark background */
            color: #f5f5f5; /* Soft light color for text */
            line-height: 1.6;
        }

        /* Container Styling */
        .attendance-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background: #1a1a1a; /* Slightly lighter dark gray */
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            border: 1px solid #333;
        }

        /* Title Styling */
        h2 {
            color: #ddd; /* Softer off-white */
            text-align: center;
            font-size: 2rem;
            margin-bottom: 30px;
            font-weight: 500;
        }

        /* Input Fields Styling */
        .input-field {
            margin-bottom: 20px;
        }

        label {
            color: #bbb; /* Light gray for labels */
            font-size: 1.1rem;
        }

        .form-control {
            background: #2c2c2c; /* Dark gray input field */
            color: #f5f5f5;
            border: 1px solid #444;
            border-radius: 8px;
            padding: 12px;
        }

        .form-control:focus {
            border-color: #777;
            outline: none;
        }

        /* Member Button Styling */
        .member-btn {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 15px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 400;
            border: none;
            cursor: pointer;
            transition: transform 0.2s ease, background-color 0.3s ease;
            text-align: left;
            background-color: #444; /* Darker button background */
            color: #f5f5f5; /* Light text */
        }

        .member-btn.present {
            background-color: #4CAF50; /* Subtle green */
        }

        .member-btn.absent {
            background-color: #d9534f; /* Subtle red */
        }

        .member-btn.excused {
            background-color: #f0ad4e; /* Subtle yellow */
        }

        .member-btn:hover {
            transform: scale(1.03);
        }

        /* Submit Button Styling */
        .btn-primary {
            background-color: #555;
            border: none;
            font-size: 1.1rem;
            font-weight: bold;
            padding: 12px 20px;
            width: 100%;
            border-radius: 8px;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #666;
        }

        /* Footer Styling */
        footer {
            text-align: center;
            padding: 20px;
            background: #0d0d0d;
            color: #f5f5f5;
            font-size: 0.9rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }

        /* Media Query for Responsiveness */
        @media (max-width: 768px) {
            .attendance-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="attendance-container">
        <h2>Rotaract Club Attendance</h2>

        <!-- Event Name and Date Inputs -->
        <div class="input-field">
            <label for="eventName">Event Name</label>
            <input type="text" id="eventName" class="form-control" placeholder="Enter Event Name" required>
        </div>

        <div class="input-field">
            <label for="eventDate">Date</label>
            <input type="date" id="eventDate" class="form-control" required>
        </div>

        <div id="memberButtons" class="d-flex flex-column align-items-stretch"></div>

        <!-- Submit Button -->
        <div class="input-field">
            <button id="submitAttendance" class="btn btn-primary">Submit Attendance</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const memberContainer = document.getElementById('memberButtons');
        const submitButton = document.getElementById('submitAttendance');
        let attendanceData = [];

        // Fetch member names from the backend
        fetch('http://localhost/WebAD/rotaract_api/get_members.php')
            .then(response => response.json())
            .then(data => {
                if (data.members && data.members.length > 0) {
                    data.members.forEach(member => {
                        // Set default attendance to "Present"
                        attendanceData.push({ name: member.name, attendance: 1 });

                        const button = document.createElement('button');
                        button.classList.add('member-btn', 'present');
                        button.textContent = member.name;
                        button.dataset.status = 'Present';

                        button.addEventListener('click', () => {
                            if (button.dataset.status === 'Present') {
                                button.dataset.status = 'Absent';
                                button.classList.remove('present');
                                button.classList.add('absent');
                            } else if (button.dataset.status === 'Absent') {
                                button.dataset.status = 'Excused';
                                button.classList.remove('absent');
                                button.classList.add('excused');
                            } else {
                                button.dataset.status = 'Present';
                                button.classList.remove('excused');
                                button.classList.add('present');
                            }

                            const memberName = button.textContent;
                            const attendanceStatus = button.dataset.status === 'Present' ? 1: (button.dataset.status === 'Absent' ? 0 : 2);
                            const existingMember = attendanceData.find(item => item.name === memberName);

                            if (existingMember) {
                                existingMember.attendance = attendanceStatus;
                            } else {
                                attendanceData.push({ name: memberName, attendance: attendanceStatus });
                            }
                        });

                        memberContainer.appendChild(button);
                    });
                } else {
                    memberContainer.innerHTML = '<p class="text-danger">No members found.</p>';
                }
            })
            .catch(error => {
                console.error('Error fetching members:', error);
                memberContainer.innerHTML = '<p class="text-danger">Failed to load members.</p>';
            });

        // Submit attendance data
        submitButton.addEventListener('click', () => {
            const eventName = document.getElementById('eventName').value;
            const eventDate = document.getElementById('eventDate').value;

            // Validate inputs
            if (!eventName || !eventDate) {
                alert('Please enter both event name and date.');
                return;
            }

            if (attendanceData.length === 0) {
                alert('No attendance data to submit.');
                return;
            }

            // Send the attendance data to the backend
            fetch('http://localhost/WebAD/rotaract_api/submit_attendance.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({
                    eventName: eventName,
                    eventDate: eventDate,
                    attendanceData: JSON.stringify(attendanceData)
                })
            })
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'success') {
                        alert('Attendance submitted successfully!');
                    } else {
                        alert('Error: ' + result.message);
                    }
                })
                .catch(error => {
                    console.error('Error submitting attendance:', error);
                    alert('Failed to submit attendance.');
                });
        });
    });
</script>

</body>
</html>
