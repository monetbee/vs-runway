// Firebase 初期化
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";

const firebaseConfig = {
  apiKey: "AIzaSyD5FwMlQmalEvBusY7eWqyxLFWYkr22XHQ",
  authDomain: "runway-5e1b8.firebaseapp.com",
  projectId: "runway-5e1b8",
  storageBucket: "runway-5e1b8.firebasestorage.app",
  messagingSenderId: "981585975834",
  appId: "1:981585975834:web:12140a1af3ef6c9e02cfa3",
  measurementId: "G-1N6HYM04DR"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

export { app, analytics };
