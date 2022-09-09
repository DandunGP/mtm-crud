<h1>Challenge Back End</h1>

<p>1. SELECT mentor, COUNT(mentor) from user_courses group by mentor ORDER by COUNT(mentor) DESC limit 1;</p>
<p>2. SELECT course, COUNT(course) from user_courses where course = "Golang" group by course ORDER by COUNT(course) DESC limit 1;</p>
<p>3. SELECT member_name, COUNT(member_id) from user_courses group by member_name ORDER by COUNT(member_id) DESC limit 1;</p>