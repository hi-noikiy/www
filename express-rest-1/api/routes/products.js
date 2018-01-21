const express = require("express");
const router = express.Router();

const multer = require("multer");
const storage = multer.diskStorage({
  destination: function(req, file, cb) {
    cb(null, "./uploads/");
  },
  filename: function(req, file, cb) {
    cb(null, Math.random() + file.originalname);
  }
});

const upload = multer({ storage: storage });

const mongoose = require("mongoose");
const Product = require("../models/product");

router.get("/", (req, res, next) => {
  /*
  res.status(200).json({
    message: "Handling GET request to /products"
  });
  */
  
  Product.find()
    .select("name price _id")
    .exec()
    .then(docs => {
      /*
      console.log(docs);
      if (docs.length >= 0) {
        res.status(200).json(docs);
      } else {
        res.status(404).json({
          message: "No entries found"
        });
      }
      */
      const response = {
        count: docs.length,
        products: docs.map(doc => {
          return {
            name: doc.name,
            price: doc.price,
            _id: doc._id,
            request: {
              type: "GET",
              url: "http://localhost:3000/products/" + doc._id
            }
          }
        })
      };
      res.status(200).json(response);
    })
    .catch(err => {
      console.log(err);
      res.status(500).json({
        error: err
      });
    });
});

router.post("/", upload.single("productImage"), (req, res, next) => {
  console.log(req.file);
  /*
  const product = {
    name: req.body.name,
    price: req.body.price
  };
  */
  
  const product = new Product({
    _id: new mongoose.Types.ObjectId(),
    name: req.body.name,
    price: req.body.price
  });
  
  product
    .save()
    .then(result => {
      console.log(result);
      res.status(201).json({
        message: "Created product successfully",
        cratedProduct: {
          name: result.name,
          price: result.price,
          _id: result._id,
          request: {
            type: "GET",
            url: "http://localhost:3000/products/" + result._id
          }
        }
      });
    })
    .catch(err => {
      console.log(err);
      res.status(500).json({
        error: err
      });
    });
  
  /*
  res.status(201).json({
    message: "Handling POST request to /products",
    cratedProduct: product
  });
  */
  
  
  
});

router.get("/:productId", (req, res, next) => {
  const id = req.params.productId;
  /*
  if (id === "special") {
    res.status(200).json({
      message: "Yor discoverd the special ID"
    });
  } else {
    res.status(200).json({
      message: "Yor passwd an ID"
    });
  }
  */
  
  Product.findById(id)
    .select("name price _id")
    .exec()
    .then(doc => {
      console.log("From database", doc);
      if (doc) {
        res.status(200).json({
          product: doc,
          request: {
            type: "GET",
            url: "http://localhost:3000/products/" + doc._id
          }
        });
      } else {
        res.status(404).json({message: "No valid entry"});
      }
    })
    .catch(err => {
      console.log(err);
      res.status(500).json({error: err});
    });
  
});

router.patch("/:productId", (req, res, next) => {
  /*
  res.status(200).json({
    message: "Update ID"
  });
  */
  const id = req.params.productId;
  const updateOps = {};
  for (const ops of req.body) {
    updateOps[ops.propName] = ops.value;
  }
  
  Product.update({ _id: id }, { $set: updateOps }).exec()
    .then(result => {
      console.log(result);
      res.status(200).json(result);
    })
    .catch(err => {
      console.log(err);
      res.status(500).json({
        error: err
      });
    });
});

router.delete("/:productId", (req, res, next) => {
  /*
  res.status(200).json({
    message: "Delete ID"
  });
  */
  
  const id = req.params.productId;
  
  Product
    .remove({
      _id: id
    })
    .exec()
    .then(result => {
      res.status(200).json(result);
    })
    .catch(err => {
      console.log(err);
      res.status(500).json({error: err});
    });
});

module.exports = router;
