var Product = require("../models/product");

var mongoose = require("mongoose");

mongoose.connect("mongodb://bori0211:Dlqka2380!@cluster0-shard-00-00-mjlmm.mongodb.net:27017,cluster0-shard-00-01-mjlmm.mongodb.net:27017,cluster0-shard-00-02-mjlmm.mongodb.net:27017/test?ssl=true&replicaSet=Cluster0-shard-0&authSource=admin");

var products = [
  new Product({
    imagePath: "https://images-na.ssl-images-amazon.com/images/I/91zLNpI28oL._SY445_.jpg",
    title: "Fight of aaa",
    description: "Awesome Game!",
    price: 10
  }),
  new Product({
    imagePath: "https://images-na.ssl-images-amazon.com/images/I/91zLNpI28oL._SY445_.jpg",
    title: "Fight of bbb",
    description: "Awesome Game!",
    price: 15
  }),
  new Product({
    imagePath: "https://images-na.ssl-images-amazon.com/images/I/91zLNpI28oL._SY445_.jpg",
    title: "Fight of ccc",
    description: "Awesome Game!",
    price: 8
  })
];

var done = 0;
for (let i = 0; i < products.length; i++) {
  products[i].save(function(err, result) {
    done++;
    if (done === products.length) {
      exit();
    }
  });
}

function exit() {
  mongoose.disconnect();
}
