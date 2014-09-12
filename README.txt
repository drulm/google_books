GOOGLE BOOKS MODULE
----------------------

Author: Darrell Ulm

The Google Books module is a filter module and an API for the
http://books.google.com, that allows a user to insert rich Google Book data
into nodes via filters with data retrieved from http://books.google.com.
The user of this filter module will be able to easily insert:

1. book data from Google into pages using Drupal filters,
2. a book cover image when it exists,
3. there are options to include / exclude any data fields,
4. and for books with a full or partial preview,
   the Google Books reader for the volume.
5. use [google_books: <search string> | <option 1> | <option 2> | ... ]
   as the replacement tag.

The starting framework of the code was based on the Book Post module
to get ideas which gets data from Open Library instead of the
Google Books API although little remains of that module other than
the framework. The Google Books module API is different based on the
data returned as well as the final aims of the module, although
they do both return book data.

The Google Books search can be done with many types of search strings.

There are many search options with Google Books and many options to
display that data within the Google Books module. The API pulls data
from Google Books in a generic way.
