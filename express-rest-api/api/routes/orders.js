const express = require("express");
const router = express.Router();

const mongoose = require("mongoose");
const Order = require("../models/order");
const Product = require("../models/product");

const OrdersController = require("../controllers/orders.js");

// Handle
router.get("/", OrdersController.orders_get_all);


router.post("/", (req, res, next) => {
  /*
  const order = {
    productId: req.body.productId,
    quantity: req.body.quantity
  }
  */
  
  Product.findById(req.body.productId)
    .then(product => {
      // 여기서 등록
    })
    .catch(err => {
      res.status(500).json({
        message: "Product not found",
        error: err
      })
    });
  
  const order = new Order({
    _id: mongoose.Types.ObjectId(),
    quantity: req.body.quantity,
    product: req.body.productId
  });
  
  order.save()
    .then(result => {
      //console.log(result);
      res.status(201).json({
        message: "Order stored",
        createdOrder: {
          _id: result._id,
          product: result.product,
          quantity: result.quantity
        },
        request: {
          type: "GET",
          url: "http://localhost:3000/orders/" + result._id
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
    message: "Order was created",
    order: order
  });
  */
});

router.get("/:orderId", (req, res, next) => {
  /*
  res.status(200).json({
    message: "Order details",
    orderId: req.params.orderId
  });
  */
  
  Order.findById(req.params.orderId)
    .exec()
    .then(order => {
      res.status(200).json({
        order: order,
        request: {
          type: "GET",
          url: "http://localhost:3000/orders"
        }
      });
    })
    .catch(err => {
      res.status(500).json({
        error: err
      });
    });
});

router.delete("/:orderId", (req, res, next) => {
  /*
  res.status(200).json({
    message: "Order delete ID",
    orderId: req.params.orderId
  });
  */
  
  Order.remove({ _id: req.params.orderId })
    .exec()
    .then(result => {
      res.status(200).json({
        message: "Order deleted"
      });
    })
    .catch(err => {
      res.status(500).json({
        error: err
      });
    });
});

module.exports = router;
