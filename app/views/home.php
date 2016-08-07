<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home page</title>
    <link rel="stylesheet" href="/blog/public/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="container">
      <h1>POSTS</h1>
      <table class="table table-striped">
          <thead>
            <tr>
              <th>
                Post Title
              </th>
              <th>
                Post Body
              </th>
              <th>
                Post Author
              </th>
            </tr>
          </thead>
          <tbody>
            {% for post in posts %}
              <tr>
                  <td>
                  <a href="{{baseUrl}}/posts/{{post.id}}">{{post.title}}</a>
                  </td>
                  <td>
                    {{post.body[:60]}}
                  </td>
                  <td>
                    {{post.author}}
                  </td>
              <tr>
            {% endfor %}
          </tbody>
      </table>

    </div>
  </body>
</html>
