# Models

### News Sources
- ID (PK AUTO)
- Name (varchar)
- Source Code (varchar)
- Website (varchar)

### Distribution Products
- ID (PK AUTO)
- Name (varchar)
- Code (varchar)
- Price (float)
- Image (url)
- Description (varchar)

### Orders
- ID (PK AUTO)
- Price (varchar)
- Paid (bool)
- List of Product IDs and Quantities (FK)
- ReleaseID (FK)

### Articles
- ID (PK AUTO)
- Headline (varchar)
- Body (varchar)
- ReleaseDate (date)
- ArticleURL (time)
- SourceID (FK)
- OrderID (FK)

## Relationships

Sources 1..* Article

Order 1..1 Article

Order *..* Product
