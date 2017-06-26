# SM-Website
Social Media project school

PHP/MySQL/Javascript project

Objects from database are returned in JSON encoding. Read and dynamically added to the page with javascript.

# Pages
The website has 6 hardcoded id's for the 6 pages:
- home
- program
- media
- student_work
- students
- haarlem

# Paragraph types - int:
- 1 = intro (intro text)
- 2 = left-photo
- 3 = right-photo
- 4 = normal (full width)
- 5 = normal without title (full width)

# Application structure:
- front-end
  - pages
    - page contains javascript that pulls data from the api
  - router
    - routes hardcoded page id's to include corresponding page
- back-end
  - admin area
  - api
    - table controllers
    - router
