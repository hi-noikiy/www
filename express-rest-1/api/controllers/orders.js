const Order = require("../models/order");

exports.orders_get_all = (req, res, next) => {
  /*
  res.status(200).json({
    message: "Orders were fetched"
  });
  */
  Order.find()
    .select("prodcut quantity _id")
    .exec()
    .then(docs => {
      res.status(200).json({
        count: docs.length,
        orders: docs.map(doc => {
          return {
            _id: doc._id,
            product: doc.product,
            quantyty: doc.quantity,
            request: {
              type: "GET",
              url: "http://localhost:3000/orders/" + doc._id
            }
          }
        })
      });
    })
    .catch(err => {
      res.status(500).json({
        error: err
      })
    });
};
